<?php

namespace Anonyzm\CadencePhp;

use Anonyzm\CadencePhp\Http\ClientFactory;
use Anonyzm\CadencePhp\Http\SerializerFactory;
use Anonyzm\CadencePhp\Models\BaseResponse;
use Anonyzm\CadencePhp\Models\Domain\DescribeDomainResponse;
use GuzzleHttp\Client;
use Ramsey\Uuid\Uuid;
use Symfony\Component\Serializer\SerializerInterface;
use Teapot\StatusCode;

class Cadence
{
    protected Client $httpClient;
    protected SerializerInterface $serializer;

    public function __construct(
        public string $serverUrl,
        public int    $serverPort,
    )
    {
        $this->httpClient = (new ClientFactory())->create($this->serverUrl, $this->serverPort);
        $this->serializer = (new SerializerFactory())->create();
    }

    public function describeDomain(string $name): DescribeDomainResponse
    {
        return $this->rpc(
            'uber.cadence.api.v1.DomainAPIDescribeDomain',
            DescribeDomainResponse::class,
            [
                'name' => $name,
                'uuid' => Uuid::uuid4(),
            ],
        );
    }

    protected function rpc(string $procedure, string $resultModelClass, array $payload = [], array $headers = []): mixed
    {
        $response = $this->httpClient->post('/', [
            'json' => $payload,
            'headers' => [
                'rpc-procedure' => $procedure,
                ...$headers
            ],
        ]);

        $statusCode = $response->getStatusCode();
        $body = $response->getBody();
        if ($statusCode !== StatusCode::OK) {
            throw new HttpException('Http error occured', $body->getContents(), $statusCode);
        }

        $json = json_decode($body, true);
        if (!$json) {
            throw new JsonDecodeException('Error decoding http response body', $body->getContents());
        }
        return $this->serializer->deserialize($json, $resultModelClass, 'json');
    }


}
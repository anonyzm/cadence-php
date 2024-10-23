<?php

namespace Anonyzm\CadencePhp\Http;

use GuzzleHttp\Client;

class ClientFactory
{
    public function create(string $serverUrl, int $serverPort): Client
    {
        return new Client([
            'base_uri' => "$serverUrl:$serverPort",
            'timeout' => 0,
            'allow_redirects' => false,
            'headers' => [
                'context-ttl-ms' => 2000,
                'rpc-caller' => 'curl-client',
                'rpc-service' => 'cadence-frontend',
                'rpc-encoding' => 'json',
            ],
        ]);
    }
}
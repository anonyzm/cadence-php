<?php

namespace Anonyzm\CadencePhp\Http;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class SerializerFactory
{
    public function create(): SerializerInterface
    {
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        return new Serializer($normalizers, $encoders);
    }
}
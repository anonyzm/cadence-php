<?php

namespace Anonyzm\CadencePhp;

use Anonyzm\CadencePhp\Http\ClientFactory;

class CadenceFactory
{
    private static $instance = null;

    public function __construct(
        public string $serverUrl,
        public int    $serverPort = 8800,
    )
    {
    }

    public function create(): Cadence
    {
        return new Cadence($this->serverUrl, $this->serverPort);
    }

    public function createSingleton(): Cadence
    {
        self::$instance = $this->create();
        return self::$instance;
    }

    public static function getInstance(): Cadence
    {
        if (!(self::$instance instanceof Cadence)) {
            throw new \ErrorException('Cadence instance is not initialized');
        }
        return self::$instance;
    }
}
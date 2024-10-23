#!/usr/bin/env php
<?php
// application.php

require __DIR__ . '/../../vendor/autoload.php';
$config = require __DIR__ . '/Config/config.php';

use Symfony\Component\Console\Application;

// Initializing \Anonyzm\CadencePhp\Cadence singleton
(new \Anonyzm\CadencePhp\CadenceFactory($config['cadenceUrl'], $config['cadencePort']))->createSingleton();

$application = new Application();

$application->add(new \Anonyzm\CadencePhp\console\commands\domain\DescribeDomainCommand());

$application->run();
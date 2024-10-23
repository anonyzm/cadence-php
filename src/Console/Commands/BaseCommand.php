<?php

namespace Anonyzm\CadencePhp\Console\Commands;

use Anonyzm\CadencePhp\Cadence;
use Anonyzm\CadencePhp\CadenceFactory;
use Symfony\Component\Console\Command\Command;

class BaseCommand extends Command
{
    public Cadence $cadence;

    public function __construct(?string $name = null)
    {
        $this->cadence = CadenceFactory::getInstance();
        parent::__construct($name);
    }
}
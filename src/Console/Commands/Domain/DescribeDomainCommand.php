<?php

namespace Anonyzm\CadencePhp\Console\Commands\Domain;

use Anonyzm\CadencePhp\Console\Commands\BaseCommand;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'domain:describe',
    description: 'Describes domain.',
    hidden: false
)]
class DescribeDomainCommand extends BaseCommand
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->cadence->describeDomain('asd');
        return Command::SUCCESS;
    }
}
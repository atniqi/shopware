<?php declare(strict_types=1);

namespace CntBackendPlugin\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'cnt:greet',
    description: 'Simple Command',
)]
class GreetCommand extends Command
{
    // Provides a description, printed out in bin/console
    protected function configure(): void
    {
        $this->setDescription('Does something very special.');
    }

    // Actual code executed in the command
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Hello there Shopware!');

        // Exit code 0 for success
        return 0;
    }
}

<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class HelloWorldCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('hello-world')
            ->setDescription('...')
            ->addOption(
                'name',
                null,
                InputOption::VALUE_REQUIRED,
                'Pls, let me know what is your name?'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $text = 'Hello '.$input->getOption('name');

        $output->writeln($text.'!');
    }

}

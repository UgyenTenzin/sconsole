<?php
namespace src\phpreboot\calculator;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class NewCalculator extends Command
{
    

    protected function configure()
    {
        $this
        
        ->setName ('calculate')
        ->setDescription('adding')
        ->addArgument('operator', InputArgument::REQUIRED, 'Enter operator' )
        ->addArgument('numbers',InputArgument::REQUIRED, 'Enter numbers' );
        
        
    
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('operator = '. $input->getArgument('operator'));
        $output->writeln('numbers = '. $input->getArgument('numbers'));

        
    }
}
?>

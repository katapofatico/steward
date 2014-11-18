<?php

namespace Lmc\Steward\Console\Event;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Event dispatched from console commands, containing instance of the Command itself and also Input and Output
 * interfaces. Thus it is possible for the listener to read information from the Input and/or adjust the Output.
 */
class ExtendedConsoleEvent extends BasicConsoleEvent
{
    /** @var InputInterface */
    protected $input;
    /** @var OutputInterface */
    protected $output;

    /**
     * @param Command $command
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    public function __construct(Command $command, InputInterface $input, OutputInterface $output)
    {
        parent::__construct($command);

        $this->input = $input;
        $this->output = $output;
    }

    /**
     * @return InputInterface
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * @return OutputInterface
     */
    public function getOutput()
    {
        return $this->output;
    }
}

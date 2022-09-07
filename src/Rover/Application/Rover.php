<?php

namespace MarsRover\Model\Rover;

use MarsRover\Model\Command\CommandsCollection;

class Rover 
{
    private $setUp;
    private $commands;

    public function getSetUp()
    {
        return $this->setUp;
    }
    public function setSetUp(RoverSetting $roverSetUp)
    {
        $this->setUp = $roverSetUp;
    }

    public function setCommands(CommandsCollection $commands)
    {
        $this->commands = $commands;
    }

    public function getCommands()
    {
        return $this->commands;
    }
}
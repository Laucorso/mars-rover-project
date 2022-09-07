<?php

namespace MarsRover\Model\Rover;

use MarsRover\Model\Coordinate\Coordinate;
use MarsRover\Model\Direction\Direction;

class RoverSetting
{
    private $coordinate;
    private $direction;
    private $surface;

    public function __construct($currentSetUpInput)
    {
        $currentSetUp = explode(' ', $currentSetUpInput);
        $this->coordinate = new Coordinate($currentSetUp[0], $currentSetUp[1]); //X, Y
        $this->direction = new Direction($currentSetUp[3]); //N S E W
    }

    public function getCoordinate()
    {
        return $this->coordinate;
    }

    public function getDirection()
    {
        return $this->direction;
    }

    public function finalRoverSetting()
    {
        return $this->coordinate->getX()." ".$this->coordinate->getY()." ".$this->direction->getOrientation();
    }

    public function getSurface()
    {
        return $this->surface;
    }

    //checkeig de la surface, if surface is an obstacle (funcio ja feta a PlanetSurface) tirarem un error i canviarem point.
}
<?php

namespace MarsRover\Model\Obstacle;

use MarsRover\Model\Coordinate\Coordinate;

class Obstacle
{
    private $coordinate;

    public function __construct(Coordinate $coordinate)
    {
        $this->setCoordinate($coordinate);
    }
    public function getCoordinate()
    {
        return $this->coordinate;
    }
    public function setCoordinate(Coordinate $coordinate)
    {
        $this->coordinate = $coordinate;
    }
}
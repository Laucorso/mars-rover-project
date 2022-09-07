<?php

namespace MarsRover\Model\Command;

use MarsRover\Model\Direction\Direction;
use MarsRover\Model\Rover\Rover;
use MarsRover\Model\Rover\RoverSetting;
use MarsRover\Model\PlanetSurface\PlanetSurface;
use MarsRover\Model\Obstacle\Obstacle;

class Move implements Command
{
    private $surface;

    public function execute(Rover $rover)
    {
        $setUp = $rover->getSetUp();
        $positionX = $setUp->getCoordinate()->getX();
        $positionY = $setUp->getCoordinate()->getY();
        $orientation = $setUp->getDirection()->getOrientation();

        if($orientation == direction::north)
        {
            $setUp = $positionX.($positionY+1);
        }
        else if($orientation == direction::south)
        {
            $setUp = $positionX.($positionY-1);
        }
        else if($orientation == direction::east)
        {
            $setUp = ($positionX+1).$positionY;
        }
        else if($orientation == direction::west)
        {
            $setUp = ($positionX-1).$positionY;
        }
    }

}
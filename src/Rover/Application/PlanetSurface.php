<?php

namespace MarsRover\Model\PlanetSurface;

use MarsRover\Model\Coordinate\Coordinate;
use MarsRover\Model\Obstacle\Obstacle;

class PlanetSurface
{
    private $locationXmax;
    private $locationYmax;
    private $obstacles = [];

    public function __construct($locationXmax, $locationYmax, $obstacles)
    {
        $this->setLocationXmax($locationXmax);
        $this->setLocationYmax($locationYmax);
        $this->setObstacles($obstacles);
    }

    public function setLocationXmax($locationXmax)
    {
        $this->locationXmax = $locationXmax;
    }

    public function setLocationYmax($locationYmax)
    {
        $this->locationYmax = $locationYmax;
    }

    public function setObstacles($obstacles)
    {
        $this->obstacles = $obstacles;
    }
    //retorna array dels obstacles del planeta
    public function getObstacles()
    {
        return $this->obstacles;
    }
    public function addObst(Obstacle $obstacle)
    {
        $this->obstacles[] = $obstacle;
    }
    //per check obstacle podriem comparar coordenades de cada obstacle
    public function isAnObstacle(Coordinate $coordinate)
    {
        foreach($this->getObstacles() as $obstacle)
        {
            if(($obstacle->getCoordinate()->getX() == $coordinate->getX()) && $obstacle->getCoordinate()->getY() == $coordinate->getY())
            {
                return true;
            }
        }
        return false;
    }

}
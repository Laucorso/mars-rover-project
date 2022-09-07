<?php

namespace MarsRover\Model\Coordinate;

class Coordinate
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->setX($x);
        $this->setY($y);
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setX($x)
    {
        if(!is_int($x))
        {
            throw new \Exception('this is not a valid X');
        }
    }

    public function setY($y)
    {
        if(!is_int($y))
        {
            throw new \Exception('this is not a valid Y');
        }
    }

    public function checkPossibleCoordinate($x, $y)
    {
        if($x > 200 || $y > 200)
        {
            throw new \Exception("Rover cannot follow your instructions. It would get out of surface");
        }
        else
        {
            return true;
        }
    }
}
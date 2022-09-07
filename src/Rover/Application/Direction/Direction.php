<?php

namespace MarsRover\Model\Direction;

class Direction
{
    const north = "N";
    const west = "W";
    const east = "E";
    const south = "S";

    private $orientation;

    public function __construct($orientation)
    {
        $orientation = trim($orientation);
        if($this->checkOrientation($orientation))
        {
            $this->orientation = $orientation;
        }
        throw new \Exception("This is not a valid orientation");
    }
    public function getOrientation()
    {
        return $this->orientation;
    }
    private function checkOrientation($orientation)
    {
        return in_array($orientation, [
            self::north,
            self::west,
            self::east,
            self::south
        ]);
    }
}

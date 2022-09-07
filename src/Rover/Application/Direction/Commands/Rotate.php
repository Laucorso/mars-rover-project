<?php

namespace MarsRover\Model\Command;

abstract class Rotate
{
    abstract protected function rotate($direction);
}
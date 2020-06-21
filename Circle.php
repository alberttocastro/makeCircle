<?php

class Circle
{
    private $radius = 0;
    function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getPerimeter()
    {
        return 2 * \pi() * $this->radius;
    }

    public function getArea()
    {
        return \pi() * ($this->radius * $this->radius);
    }
}
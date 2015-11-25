<?php

namespace Aston\Painter;

class Circle extends Shape implements AreaHandler {

    private $radius;

    public function __construct($x = 0, $y = 0, $radius = 0, $label = null)
    {
        parent::__construct($x, $y, $label);
        $this->setRadius($radius);
    }

    public function setRadius($radius)
    {

        $this->radius = (int) $radius;
        return $this;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function draw($img)
    {
        $rgba = $this->getFillColor();
        $color = imagecolorallocate($img, $rgba[0], $rgba[1], $rgba[2]);
        
    }

    //put your code here
    public function getArea()
    {
        return pow($this->getRadius(), 2) * M_PI;
    }

}

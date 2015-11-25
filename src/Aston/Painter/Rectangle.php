<?php

namespace Aston\Painter;

class Rectangle extends Shape implements AreaHandler {

    //put your code here
    private $width;
    private $heigth;

    public function __construct($x = 0, $y = 0, $label = null, $width = 0, $heigth = 0)
    {
        parent::__construct($x, $y, $label);
        $this->setHeigth($heigth)
                ->setWidth($width);
    }

    public function draw($img)
    {
        $rgba = $this->getFillColor();
        $color = imagecolorallocate($img, $rgba[0], $rgba[1], $rgba[2]);
        imagefilledrectangle($img, $this->getX(), $this->getY(), $this->getWidth(), $this->getHeigth(), $color);
    }

    function setWidth($width)
    {
        $this->width = (int) $width;
        return $this;
    }
    function getWidth () {
        return $this->width;
    }
    function getHeigth(){
        return $this->heigth;
    }
    function setHeigth($heigth)
    {
        $this->heigth = (int) $heigth;
        return $this;
    }

    function getArea()
    {
        return $this->getWidth() * $this->getHeigth();
    }

}

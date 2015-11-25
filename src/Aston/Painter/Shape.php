<?php

namespace Aston\Painter;

abstract class Shape {

    //put your code here
    private $x;
    private $y;
    private $label;
    private $fillColor = array(0,0,0,0);
    
    
    function getFillColor()
    {
        return $this->fillColor;
    }

    function setFillColor($r, $g, $b, $a = 0)
    {
        $this->fillColor =array($r,$g,$b,$a);
        
        return $this;
    }

   
    public function __construct($x = 0, $y = 0, $label = null) {
        $this->setX($x)
                ->setY($y)
                ->setLabel($label);
    }

    public function setX($x) {
        $this->x = (int) $x;
        return $this;
    }
   

    public function getX() {
        return $this->x;
    }

    public function setY($y) {
        $this->y = (int) $y;
        return $this;
    }

    public function getY() {
        return $this->y;
    }

    public function setLabel($label) {
        $this->label = (string) $label;
        
        return $this;
    }

    public function getLabel() {
        return $this->label;
    }
     abstract public function draw($img);

}

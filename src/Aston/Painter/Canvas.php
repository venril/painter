<?php

namespace Aston\Painter;

class Canvas {

    //put your code here
    private $width;
    private $height;
    private $shapes = array();
    private $mimeType = "image/png";

    public function __construct($width = 0, $height = 0)
    {
        $this->setWidth($width)
                ->setHeight($height);
    }

    function getWidth()
    {
        return $this->width;
    }

    public function render()
    {

        header('Content-Type: ' . $this->getMimeType());
        $img = imagecreatetruecolor($this->getWidth(), $this->getHeight());
        foreach ($this->getShapes() as $shape) {
             $shape->draw($img);
        }
       $this->generate($img);
     imagepng($img);
            imagedestroy($img);
    }

    protected function generate($img)
    {
        switch ($this->getMimeType()) {
            case "image/png":
                imagepng($img);
                break;
            default:
                imagejpeg($img);
        }
    }

    function getHeight()
    {
        return $this->height;
    }

    function getShapes()
    {
        return $this->shapes;
    }

    function setWidth($width)
    {
        $this->width = (int) $width;
        return $this;
    }

    function setHeight($height)
    {
        $this->height = (int) $height;
        return $this;
    }

    function getMimeType()
    {
        return $this->mimeType;
    }

    function setMimeType($mimeType)
    {
        $this->mimeType = (string) $mimeType;
        return $this;
    }

    function addShape(Shape $shape)
    {
        array_push($this->shapes, $shape);
        return $this;
    }

}

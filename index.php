<?php
        // put your code here
        require 'src/Aston/Painter/Shape.php';
        require 'src/Aston/Painter/AreaHandler.php';
        require 'src/Aston/Painter/Circle.php';
        require 'src/Aston/Painter/Rectangle.php';
        require 'src/Aston/Painter/Square.php';
        require 'src/Aston/Painter/Point.php';
        require 'src/Aston/Painter/Canvas.php';
        
        $rect = new Aston\Painter\Rectangle(14, 12, 200,100);
       //  var_dump($rect);
        $square = new Aston\Painter\Square(100, 200, 100,100);
        $circle = new Aston\Painter\Circle(0, 0, 50);
        $canvas = new Aston\Painter\Canvas(600,400);
        $rect->setFillColor(255, 255, 255, 255);
        $square->setFillColor(500, 300, 150, 44);
        $circle->setFillColor(123, 10, 150, 44);
       // var_dump($rect);    
        $canvas -> addShape($rect) 
               -> addShape($square) 
               -> addShape($circle);
        
       $canvas->render();
       
       
        
      
   
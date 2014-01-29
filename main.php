<?php

require_once('library/Larva/VectorDrawing/Drawing.php');
require_once('library/Larva/VectorDrawing/WidgetInterface.php');
require_once('library/Larva/VectorDrawing/Widget/Ellipse.php');
require_once('library/Larva/VectorDrawing/Widget/Circle.php');
require_once('library/Larva/VectorDrawing/Widget/Rectangle.php');
require_once('library/Larva/VectorDrawing/Widget/Square.php');
require_once('library/Larva/VectorDrawing/Widget/Textbox.php');

use Larva\VectorDrawing\Drawing;
use Larva\VectorDrawing\Widget\Circle;
use Larva\VectorDrawing\Widget\Ellipse;
use Larva\VectorDrawing\Widget\Rectangle;
use Larva\VectorDrawing\Widget\Square;
use Larva\VectorDrawing\Widget\Textbox;

echo "Current Drawing:" . PHP_EOL .
    new Drawing([
        new Ellipse(43, 65, 76, 87),
        new Circle(10, 20, 30),
        new Rectangle(40, 50, 60, 70),
        new Square(80, 90, 100),
        new Textbox(new Rectangle(0, 0, 300, 100), "This is a test.")
    ]);

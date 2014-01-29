<?php

namespace Larva\VectorDrawing\Widget;

class RectangleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function rectangleOutput()
    {
        $rectangle = new Rectangle(1, 2, 3, 4);

        $this->assertEquals('Larva\VectorDrawing\Widget\Rectangle (1,2) w=3 h=4', (string)$rectangle);
    }
}

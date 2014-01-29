<?php

namespace Larva\VectorDrawing\Widget;

class SquareTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function squareOutput()
    {
        $square = new Square(1, 2, 3, 4);

        $this->assertEquals('Larva\VectorDrawing\Widget\Square (1,2) w=3', (string)$square);
    }
}

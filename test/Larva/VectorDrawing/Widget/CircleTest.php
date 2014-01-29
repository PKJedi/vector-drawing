<?php

namespace Larva\VectorDrawing\Widget;

class CircleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function circleOutput()
    {
        $circle = new Circle(123, 456, 789);

        $this->assertEquals('Larva\VectorDrawing\Widget\Circle (123,456) r=789', (string)$circle);
    }
}

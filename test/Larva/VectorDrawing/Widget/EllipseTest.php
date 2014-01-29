<?php

namespace Larva\VectorDrawing\Widget;

class EllipseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function ellipseOutput()
    {
        $ellipse = new Ellipse(1, 2, 3, 4);

        $this->assertEquals('Larva\VectorDrawing\Widget\Ellipse (1,2) rW=3 rH=4', (string)$ellipse);
    }
}

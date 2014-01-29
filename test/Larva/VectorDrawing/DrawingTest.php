<?php

namespace Larva\VectorDrawing;

class DrawingTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function widgetsOutput()
    {
        $widget = $this->getMock('Larva\VectorDrawing\WidgetInterface');
        $widget->expects($this->exactly(2))->method('__toString')->will($this->returnValue('test'));

        $drawing = new Drawing([$widget, $widget]);

        $this->assertEquals("test" . PHP_EOL . "test" . PHP_EOL, (string)$drawing);
    }
}

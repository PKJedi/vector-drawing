<?php

namespace Larva\VectorDrawing\Widget;

class TextboxTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function textboxOutput()
    {
        $textbox = new Textbox(new Rectangle(1, 2, 3, 4), 'Something');

        $this->assertEquals(
            'Larva\VectorDrawing\Widget\Textbox bound by' .
            ' (Larva\VectorDrawing\Widget\Rectangle (1,2) w=3 h=4) text=Something',
            (string)$textbox
        );
    }
}

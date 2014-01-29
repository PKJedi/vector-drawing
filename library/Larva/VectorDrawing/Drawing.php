<?php

namespace Larva\VectorDrawing;

/**
 * A drawing constructed of Widgets.
 */
class Drawing
{
    /**
     * @var array
     */
    private $widgets;

    /**
     * @param array $widgets
     */
    public function __construct($widgets)
    {
        $this->widgets = $widgets;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return implode(PHP_EOL, $this->widgets) . PHP_EOL;
    }
}

<?php

namespace Larva\VectorDrawing\Widget;

use Larva\VectorDrawing\WidgetInterface;

/**
 * A Widget rectangle with position, width and height.
 */
class Rectangle implements WidgetInterface
{
    private $x;

    private $y;

    private $w;

    private $h;

    public function __construct($x, $y, $w, $h)
    {
        $this->x = $x;
        $this->y = $y;
        $this->w = $w;
        $this->h = $h;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function getW()
    {
        return $this->w;
    }

    public function getH()
    {
        return $this->h;
    }

    public function __toString()
    {
        return
            get_class() . ' (' . $this->getX() . ',' . $this->getY() . ') ' .
            'w=' . $this->getW() . ' h=' . $this->getH();
    }
}

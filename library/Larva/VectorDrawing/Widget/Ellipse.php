<?php

namespace Larva\VectorDrawing\Widget;

use Larva\VectorDrawing\WidgetInterface;

/**
 * A Widget ellipse with position and w, h diameters.
 */
class Ellipse implements WidgetInterface
{
    private $x;

    private $y;

    private $rW;

    private $rH;

    public function __construct($x, $y, $rW, $rH)
    {
        $this->x = $x;
        $this->y = $y;
        $this->rW = $rW;
        $this->rH = $rH;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function getRW()
    {
        return $this->rW;
    }

    public function getRH()
    {
        return $this->rH;
    }

    public function __toString()
    {
        return
            get_class() . ' (' . $this->getX() . ',' . $this->getY() . ') ' .
            'rW=' . $this->getRW() . ' rH=' . $this->getRH();
    }
}

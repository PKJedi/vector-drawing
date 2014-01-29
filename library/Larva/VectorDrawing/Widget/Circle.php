<?php

namespace Larva\VectorDrawing\Widget;

use Larva\VectorDrawing\WidgetInterface;

/**
 * A Widget circle with position and diameter.
 */
class Circle extends Ellipse implements WidgetInterface
{
    public function __construct($x, $y, $r)
    {
        parent::__construct($x, $y, $r, $r);
    }

    public function getR()
    {
        return $this->getRW();
    }

    public function __toString()
    {
        return get_class() . ' (' . $this->getX() . ',' . $this->getY() . ') r=' . $this->getR();
    }
}

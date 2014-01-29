<?php

namespace Larva\VectorDrawing\Widget;

use Larva\VectorDrawing\WidgetInterface;

/**
 * A Widget square with position and side length.
 */
class Square extends Rectangle implements WidgetInterface
{
    public function __construct($x, $y, $w)
    {
        parent::__construct($x, $y, $w, $w);
    }

    public function __toString()
    {
        return get_class() . ' (' . $this->getX() . ',' . $this->getY() . ') w=' . $this->getW();
    }
}

<?php

namespace Larva\VectorDrawing\Widget;

use Larva\VectorDrawing\WidgetInterface;

/**
 * A Widget textbox with bounding Rectangle and text.
 */
class Textbox implements WidgetInterface
{
    /**
     * @var Rectangle
     */
    private $bounds;

    /**
     * @var string
     */
    private $text;

    public function __construct(Rectangle $bounds, $text)
    {
        $this->bounds = $bounds;
        $this->text = $text;
    }

    /**
     * @return Rectangle
     */
    public function getBounds()
    {
        return $this->bounds;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return get_class() . ' bound by (' . $this->getBounds() . ') text=' . $this->getText();
    }
}

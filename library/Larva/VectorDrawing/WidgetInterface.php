<?php

namespace Larva\VectorDrawing;

/**
 * Describes Widgets used in Drawings.
 *
 * Later would require draw() etc.
 */
interface WidgetInterface
{
    /**
     * @return string
     */
    public function __toString();
}

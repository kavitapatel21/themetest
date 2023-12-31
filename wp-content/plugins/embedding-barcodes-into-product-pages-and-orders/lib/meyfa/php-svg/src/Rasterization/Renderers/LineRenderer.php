<?php

namespace SVG\Rasterization\Renderers;

use SVG\Rasterization\SVGRasterizer;

class LineRenderer extends Renderer
{
    protected function prepareRenderParams(SVGRasterizer $rasterizer, array $options)
    {
        $offsetX = $rasterizer->getOffsetX();
        $offsetY = $rasterizer->getOffsetY();

        return array(
            'x1' => self::prepareLengthX($options['x1'], $rasterizer) + $offsetX,
            'y1' => self::prepareLengthY($options['y1'], $rasterizer) + $offsetY,
            'x2' => self::prepareLengthX($options['x2'], $rasterizer) + $offsetX,
            'y2' => self::prepareLengthY($options['y2'], $rasterizer) + $offsetY,
        );
    }

    protected function renderFill($image, array $params, $color)
    {
    }

    protected function renderStroke($image, array $params, $color, $strokeWidth)
    {
        imagesetthickness($image, $strokeWidth);
        imageline($image, $params['x1'], $params['y1'], $params['x2'], $params['y2'], $color);
    }
}

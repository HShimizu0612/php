<?php
function triangle($bottom, $height)
{
    $triangleArea = ($bottom * $height) / 2;
    return $triangleArea;
}

function square($bottom, $height)
{
    $squareArea = $bottom * $height;
    return $squareArea;
}

function trapezoid($top, $bottom, $height)
{
    $trapezoidArea = ($top + $bottom) * $height / 2;
    return $trapezoidArea;
}

echo triangle(3, 4) . "\n";
echo square(5, 10) . "\n";
echo trapezoid(2, 3, 8);
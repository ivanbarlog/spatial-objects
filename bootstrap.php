<?php

function __autoload($class)
{
    $parts = explode('\\', $class);
    array_shift($parts);
    require __DIR__.'/src/'.implode('/', $parts).'.php';
}

$calculator = new ib\Calculator();

$cube = new ib\SpatialObject\Cube(5);
$block = new ib\SpatialObject\Block(2, 3, 4);

printf("%s\n", $calculator->area($cube));
printf("%s\n", $calculator->volume($cube));
printf("%s\n", $calculator->area($block));
printf("%s\n", $calculator->volume($block));

$badExampleCalculator = new ib\BadExampleCalculator();

$badExampleCube = new ib\SpatialObject\BadExampleCube(5);
$badExampleBlock = new ib\SpatialObject\BadExampleBlock(2, 3, 4);

printf("%s\n", $badExampleCalculator->area($badExampleCube));
printf("%s\n", $badExampleCalculator->volume($badExampleCube));
printf("%s\n", $badExampleCalculator->area($badExampleBlock));
printf("%s\n", $badExampleCalculator->volume($badExampleBlock));

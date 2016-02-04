<?php

namespace ib;

use ib\SpatialObject\BadExampleBlock;
use ib\SpatialObject\BadExampleCone;
use ib\SpatialObject\BadExampleCube;

/**
 * Class BadExampleCalculator
 * @package ib
 */
class BadExampleCalculator
{
    public function area($object)
    {
        if ($object instanceof BadExampleCube) {
            return $object->getLength() * $object->getLength() * 6;
        }

        if ($object instanceof BadExampleBlock) {
            return
                2 * ($object->getLength() * $object->getWidth()) +
                2 * ($object->getLength() * $object->getHeight()) +
                2 * ($object->getHeight() * $object->getWidth());
        }

        if ($object instanceof BadExampleCone) {
            return "area of cone";
        }
    }

    public function volume($object)
    {
        if ($object instanceof BadExampleCube) {
            return $object->getLength() * $object->getLength() * $object->getLength();
        }

        if ($object instanceof BadExampleBlock) {
            return $object->getHeight() * $object->getHeight() * $object->getWidth();
        }

        if ($object instanceof BadExampleCone) {
            return 1/3 * ($object->getHeight() * pi() * ($object->getRadius() * $object->getRadius()));
        }
    }
}

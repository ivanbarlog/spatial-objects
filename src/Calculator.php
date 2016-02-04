<?php

namespace ib;

use ib\SpatialObject\SpatialObject;

/**
 * Class Calculator
 */
class Calculator
{
    public function area(SpatialObject $object)
    {
        return $object->area();
    }

    public function volume(SpatialObject $object)
    {
        return $object->volume();
    }
}

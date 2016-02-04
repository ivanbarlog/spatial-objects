<?php

namespace ib\SpatialObject;

/**
 * Class Cube
 * @package SpatialObject
 */
interface SpatialObject
{
    /**
     * @return float
     */
    public function area();

    /**
     * @return float
     */
    public function volume();
}

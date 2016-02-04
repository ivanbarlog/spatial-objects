<?php

namespace ib\SpatialObject;

/**
 * Class Cube
 * @package SpatialObject
 */
class Cube implements SpatialObject
{
    /**
     * @var float
     */
    private $length;

    public function __construct($length)
    {
        $this->length = (float)$length;
    }

    /**
     * @return float
     */
    public function area()
    {
        return 6 * $this->length * $this->length;
    }

    /**
     * @return float
     */
    public function volume()
    {
        return $this->length * $this->length * $this->length;
    }
}

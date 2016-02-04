<?php

namespace ib\SpatialObject;

/**
 * Class Cone
 * @package ib\SpatialObject
 */
class Cone implements SpatialObject
{
    /**
     * @var
     */
    private $length;
    /**
     * @var
     */
    private $height;

    public function __construct($length, $height)
    {
        $this->length = $length;
        $this->height = $height;
    }

    /**
     * @return float
     */
    public function area()
    {
        return "area of cone";
    }

    /**
     * @return float
     */
    public function volume()
    {
        return "volume of cone";
    }
}

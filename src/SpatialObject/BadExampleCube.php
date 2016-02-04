<?php

namespace ib\SpatialObject;

/**
 * Class BadExampleCube
 * @package ib\SpatialObject
 */
class BadExampleCube
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
    public function getLength()
    {
        return $this->length;
    }
}

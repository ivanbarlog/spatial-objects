<?php

namespace ib\SpatialObject;

/**
 * Class BadExampleCone
 * @package ib\SpatialObject
 */
class BadExampleCone
{
    /** @var float */
    private $radius;

    /** @var float */
    private $height;

    public function __construct($radius, $height)
    {
        $this->radius = (float)$radius;
        $this->height = (float)$height;
    }

    /**
     * @return float
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }
}

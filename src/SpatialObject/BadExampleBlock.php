<?php

namespace ib\SpatialObject;

/**
 * Class BadExampleBlock
 * @package ib\SpatialObject
 */
class BadExampleBlock
{
    /** @var float  */
    private $length;
    /** @var float  */
    private $width;
    /** @var float  */
    private $height;

    public function __construct($length, $width, $height)
    {
        $this->length = (float)$length;
        $this->width = (float)$width;
        $this->height = (float)$height;
    }

    /**
     * @return float
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @return float
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }
}

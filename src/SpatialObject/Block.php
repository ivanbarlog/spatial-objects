<?php

namespace ib\SpatialObject;

/**
 * Class Block
 * @package SpatialObject
 */
class Block implements SpatialObject
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
    public function area()
    {
        return
            2 * ($this->length * $this->width) +
            2 * ($this->length * $this->height) +
            2 * ($this->height * $this->width);
    }

    /**
     * @return float
     */
    public function volume()
    {
        return
            $this->length * $this->width * $this->height;
    }
}

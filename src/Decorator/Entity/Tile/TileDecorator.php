<?php
namespace DSP\Decorator\Entity\Tile;

use DSP\Decorator\Entity\Tile;

abstract class TileDecorator extends Tile
{
    /** @var Tile  */
    protected $tile;
    public function __construct(Tile $tile)
    {
        $this->tile = $tile;
    }
}
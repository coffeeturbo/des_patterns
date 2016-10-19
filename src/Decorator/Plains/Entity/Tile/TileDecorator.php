<?php
namespace DSP\Decorator\Plains\Entity\Tile;

use DSP\Decorator\Plains\Entity\Tile;

abstract class TileDecorator extends Tile
{
    /** @var Tile  */
    protected $tile;
    public function __construct(Tile $tile)
    {
        $this->tile = $tile;
    }
}
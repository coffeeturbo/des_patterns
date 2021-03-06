<?php
namespace DSP\Decorator\Plains\Entity\Tile\TileDecorator;

use DSP\Decorator\Plains\Entity\Tile\TileDecorator;

class PolutedDecorator extends TileDecorator
{
    function getWealthFactor(){
        return $this->tile->getWealthFactor() - 4;
    }

}
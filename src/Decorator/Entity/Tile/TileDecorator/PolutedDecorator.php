<?php
namespace DSP\Decorator\Entity\Tile\TileDecorator;

use DSP\Decorator\Entity\Tile\TileDecorator;

class PolutedDecorator extends TileDecorator
{
    function getWealthFactor(){
        return $this->tile->getWealthFactor() - 4;
    }

}
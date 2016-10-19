<?php
namespace DSP\Decorator\Plains\Entity\Tile;

use DSP\Decorator\Plains\Entity\Tile;

class Plains extends Tile
{
    private $wealthFactor =2;

    function getWealthFactor(){
        return $this->wealthFactor;
    }

}
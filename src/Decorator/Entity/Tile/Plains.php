<?php
namespace DSP\Decorator\Entity\Tile;

use DSP\Decorator\Entity\Tile;

class Plains extends Tile
{
    private $wealthFactor =2;

    function getWealthFactor(){
        return $this->wealthFactor;
    }

}
<?php
namespace DSP\Composite\Entity\Unit;


use DSP\Composite\Entity\Unit;

abstract class CompositeUnit extends Unit
{
    private $units = [];

    public function getComposite(){
        return $this;
    }

    public function addUnit(Unit $unit){

        if(!in_array($unit, $this->units, true))
            $this->units[] = $unit;
        return $this;
    }

    public function removeUnit(Unit $unit){

    }

    function bombardStreight(){
        $streight = 0;

        foreach($this->units as $unit){
            /** @var Unit $unit **/
            $streight += $unit->bombardStreight();
        }
        return $streight;
    }
}
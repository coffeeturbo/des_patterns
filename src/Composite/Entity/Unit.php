<?php
namespace DSP\Composite\Entity;

abstract class Unit
{
    abstract function bombardStreight();

    public function getComposite(){
        return null;
    }
}
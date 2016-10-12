<?php
namespace DSP\Prototype\Entity;

class Sea
{
    private $navigatibility = 0;
    public function __construct($navigatibility)
    {
        $this->navigatibility = $navigatibility;
    }
}
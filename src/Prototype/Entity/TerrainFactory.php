<?php
namespace DSP\Prototype\Entity;

class TerrainFactory
{
    private $sea;
    private $forest;
    private $plains;

    public function __construct(Sea $sea, Forest $forest, Plains $plains)
    {
        $this->forest = $forest;
        $this->sea = $sea;
        $this->plains = $plains;
    }

    public function getSea(): Sea
    {
        return clone $this->sea;
    }

    public function getForest(): Forest
    {
        return clone $this->forest;
    }

    public function getPlains(): Plains
    {
        return clone $this->plains;
    }
}
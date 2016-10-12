<?php
namespace DSP\Prototype;

use DSP\Prototype\Entity\Forest\EarthForest;
use DSP\Prototype\Entity\Plains\EarthPlains;
use DSP\Prototype\Entity\Sea\EarthSea;
use DSP\Prototype\Entity\TerrainFactory;

include __DIR__ . '/../../vendor/autoload.php';

$factory = new TerrainFactory(new EarthSea(-1), new EarthForest(), new EarthPlains());

print_r($factory->getForest());
print "<br>";
print_r($factory->getPlains());
print "<br>";
print_r($factory->getSea());
print "<br>";
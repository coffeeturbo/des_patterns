<?php
namespace DSP\Decorator;


use DSP\Decorator\Entity\Tile\Plains;
use DSP\Decorator\Entity\Tile\TileDecorator\DimondDecorator;
use DSP\Decorator\Entity\Tile\TileDecorator\PolutedDecorator;

require __DIR__."/../../vendor/autoload.php";

$dimodnPlains = new DimondDecorator(new Plains());
$polutedPlains = new PolutedDecorator(new Plains());
$polutedDimondPlains = new PolutedDecorator(new DimondDecorator(new Plains()));


print sprintf("<br>Богатство данных земель: %s",$dimodnPlains->getWealthFactor());
print sprintf("<br>Богатство данных земель: %s",$polutedPlains->getWealthFactor());
print sprintf("<br>Богатство данных земель: %s",$polutedDimondPlains->getWealthFactor());

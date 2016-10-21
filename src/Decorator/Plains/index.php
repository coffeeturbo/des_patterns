<?php
namespace DSP\Decorator\Plains\Plains;


use DSP\Decorator\Plains\Entity\Tile\Plains;
use DSP\Decorator\Plains\Entity\Tile\TileDecorator\DimondDecorator;
use DSP\Decorator\Plains\Entity\Tile\TileDecorator\PolutedDecorator;

require __DIR__."/../../../vendor/autoload.php";

$dimodnPlains = new DimondDecorator(new Plains());
print sprintf("<br>Богатство данных земель: %s",$dimodnPlains->getWealthFactor());


$polutedPlains = new PolutedDecorator(new Plains());
print sprintf("<br>Богатство данных земель: %s",$polutedPlains->getWealthFactor());


$polutedDimondPlains = new PolutedDecorator(new DimondDecorator(new Plains()));
print sprintf("<br>Богатство данных земель: %s",$polutedDimondPlains->getWealthFactor());

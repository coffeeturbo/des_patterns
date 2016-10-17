<?php
namespace DSP\Composite;

use DSP\Composite\Entity\Unit\Archer;
use DSP\Composite\Entity\Unit\CompositeUnit\Army;
include __DIR__ . '/../../vendor/autoload.php';


$army = new Army();
$army->addUnit(new Archer())
    ->addUnit(new Archer());

$sub_army = new Army();
$sub_army->addUnit(new Archer())
    ->addUnit(new Archer())
    ->addUnit(new Archer());


print sprintf("<br>Сумма сил Армии #1: %d", $army->bombardStreight());
print sprintf("<br>Сумма сил Армии #2: %d", $sub_army->bombardStreight());

$army->addUnit($sub_army);
print sprintf("<br>Общая сумма сил Армии 1 и 2 : %d", $army->bombardStreight());


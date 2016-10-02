<?php
namespace DSP\Singletone;

use DSP\Singletone\Entity\Preferences;

include __DIR__.'/../../vendor/autoload.php';

print sprintf("<h1>%s</h1>", 'Singleton Design Pattern');

$singletone = Preferences::getInstance();

$singletone->setProperty('db_name', 'test_db');
print $singletone->getProperty('db_name');

unset($singletone);

$singletone2 = Preferences::getInstance();

print $singletone2->getProperty('db_name');



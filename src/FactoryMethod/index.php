<?php
namespace DSP\FactoryMethod;



use DSP\FactoryMethod\Entity\CommsManager\BloggsCommsManager;
use DSP\FactoryMethod\Entity\CommsManager\MegaCommsManager;

include __DIR__.'/../../vendor/autoload.php';
print sprintf("<h1>%s</h1>", 'Factory Method Design Pattern');

//$comms = new CommsManager(CommsManager::MEGA);

//$apptEncoder = $comms->getAppEncoder();

//print $apptEncoder->encode();

$bloggComm = new BloggsCommsManager();

$bloggEncoder = $bloggComm->getAppEncoder();

print sprintf("%s<br>%s<br>%s<br>",
              $bloggComm->getHeaderText(),
              $bloggEncoder->encode(),
              $bloggComm->getFooterText());


$megaComm = new MegaCommsManager();
$megaEncoder = $megaComm->getAppEncoder();

print sprintf("%s<br>%s<br>%s<br>",
              $megaComm->getHeaderText(),
              $megaEncoder->encode(),
              $megaComm->getFooterText());

<?php
namespace DSP\AbstractFactory;


use DSP\AbstractFactory\Entity\CommsManager;
use DSP\AbstractFactory\Entity\CommsManager\BloggsCommsManager;

include __DIR__.'/../../vendor/autoload.php';
print sprintf("<h1>%s</h1>", 'Abstract Factory Design Pattern');


$BloggsComms = new BloggsCommsManager();
$BloggsCommsAppt = $BloggsComms->make($BloggsComms::APPT);
print $BloggsCommsAppt->encode()."<br>";

$MegaComms = new CommsManager\MegaCommsManager();
$megaCommsAppt = $MegaComms->make($MegaComms::APPT);
print $megaCommsAppt->encode()."<br>";


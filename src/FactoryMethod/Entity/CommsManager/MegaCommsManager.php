<?php
namespace DSP\FactoryMethod\Entity\CommsManager;

use DSP\FactoryMethod\Entity\ApptEncoder;
use DSP\FactoryMethod\Entity\ApptEncoder\MegaApptEncoder;
use DSP\FactoryMethod\Entity\CommsManager;

class MegaCommsManager extends CommsManager
{
    public function getHeaderText():string
    {
        return 'this is header text';
    }

    public function getAppEncoder(): ApptEncoder
    {
        return new MegaApptEncoder();
    }

    public function getFooterText():string
    {
        return "this is footer text \n";
    }

}
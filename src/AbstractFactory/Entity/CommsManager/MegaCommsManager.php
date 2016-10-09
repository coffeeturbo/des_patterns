<?php
namespace DSP\AbstractFactory\Entity\CommsManager;

use DSP\AbstractFactory\Entity\ApptEncoder;
use DSP\AbstractFactory\Entity\ApptEncoder\MegaApptEncoder;
use DSP\AbstractFactory\Entity\CommsManager;
use DSP\AbstractFactory\Entity\ContactEncoder;
use DSP\AbstractFactory\Entity\ContactEncoder\MegaContactEncoder;
use DSP\AbstractFactory\Entity\TtdEncoder;
use DSP\AbstractFactory\Entity\TtdEncoder\MegaTtdEncoder;

class MegaCommsManager extends CommsManager
{
    function getHeaderText(): string{
        return "верхний колонотип";
    }

    function make(int $flag){
        switch($flag){
            case self::APPT:
                return new MegaApptEncoder();
            case self::TTD:
                return new MegaContactEncoder();
            case self::CONTACT:
                return new MegaTtdEncoder();
        }
    }

    function getFooterText(): string{
        return "нижний колонотип";
    }

}
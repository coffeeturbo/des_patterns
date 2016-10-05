<?php
namespace DSP\AbstractFactory\Entity\CommsManager;

use DSP\AbstractFactory\Entity\ApptEncoder;
use DSP\AbstractFactory\Entity\CommsManager;
use DSP\AbstractFactory\Entity\ContactEncoder;
use DSP\AbstractFactory\Entity\TtdEncoder;

class MegaCommsManager extends CommsManager
{
    function getHeaderText(): string{
        return "верхний колонотип";
    }

    function getApptEncoder(): ApptEncoder{
        // TODO: Implement getApptEncoder() method.
    }

    function getContactEncoder(): ContactEncoder{
        // TODO: Implement getContactEncoder() method.
    }

    function getTtdEncoder(): TtdEncoder{
        // TODO: Implement getTtdEncoder() method.
    }

    function getFooterText(): string{
        return "нижний колонотип";
    }

}
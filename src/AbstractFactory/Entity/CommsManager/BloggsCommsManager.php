<?php
namespace DSP\AbstractFactory\Entity\CommsManager;


use DSP\AbstractFactory\Entity\ApptEncoder;
use DSP\AbstractFactory\Entity\ApptEncoder\BloggsApptEncoder;
use DSP\AbstractFactory\Entity\ApptEncoder\ContactApptEncoder;
use DSP\AbstractFactory\Entity\CommsManager;
use DSP\AbstractFactory\Entity\ContactEncoder;
use DSP\AbstractFactory\Entity\TtdEncoder;


class BloggsCommsManager extends CommsManager
{
    function getHeaderText(): string{
        return "верхний колонотип";
    }

    function getApptEncoder(): ApptEncoder{
        return new BloggsApptEncoder();
    }

    function getContactEncoder(): ContactEncoder{

    }

    function getTtdEncoder(): TtdEncoder{
        // TODO: Implement getTtdEncoder() method.
    }

    function getFooterText(): string{
        return "нижний колонотип";
    }

}
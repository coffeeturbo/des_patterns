<?php
namespace DSP\AbstractFactory\Entity\CommsManager;


use DSP\AbstractFactory\Entity\ApptEncoder;
use DSP\AbstractFactory\Entity\ApptEncoder\BloggsApptEncoder;
use DSP\AbstractFactory\Entity\CommsManager;
use DSP\AbstractFactory\Entity\ContactEncoder;
use DSP\AbstractFactory\Entity\ContactEncoder\BloggsContactEncoder;
use DSP\AbstractFactory\Entity\TtdEncoder;
use DSP\AbstractFactory\Entity\TtdEncoder\BloggsTtdEncoder;


class BloggsCommsManager extends CommsManager
{
    function getHeaderText(): string{
        return "верхний колонотип";
    }

    function make(int $flag){
        switch($flag){
            case self::APPT:
                return new BloggsApptEncoder();
            case self::TTD:
                return new BloggsTtdEncoder();
            case self::CONTACT:
                return new BloggsContactEncoder();
        }
    }

    function getFooterText(): string{
        return "нижний колонотип";
    }
}
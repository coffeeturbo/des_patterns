<?php
namespace DSP\FactoryMethod\Entity\CommsManager;

use DSP\FactoryMethod\Entity\ApptEncoder;
use DSP\FactoryMethod\Entity\ApptEncoder\BloggsApptEncoder;
use DSP\FactoryMethod\Entity\CommsManager;

class BloggsCommsManager extends CommsManager
{
    public function getHeaderText(): string
    {
        return "Header text\n";
    }

    public function getAppEncoder(): ApptEncoder
    {
        return new BloggsApptEncoder();
    }

    public function getFooterText(): string
    {
        return "header text\n";
    }

}
<?php
namespace DSP\AbstractFactory\Entity\ApptEncoder;

use DSP\AbstractFactory\Entity\ApptEncoder;

class BloggsApptEncoder extends ApptEncoder
{
    function encode(){
        return "Данные о встрече закодированны в формате Blogg";
    }

}
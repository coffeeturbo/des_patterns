<?php
namespace DSP\FactoryMethod\Entity\ApptEncoder;

use DSP\FactoryMethod\Entity\ApptEncoder;

class MegaApptEncoder extends ApptEncoder
{
    function encode(){
        return "Данные о встрече закодированны в формате MegaCall \n";
    }
}
<?php
namespace DSP\AbstractFactory\Entity\ContactEncoder;

use DSP\AbstractFactory\Entity\ContactEncoder;

class MegaContactEncoder extends ContactEncoder
{
    function encode(){
        return "Данные контакта закодированны в формате Mega";
    }

}
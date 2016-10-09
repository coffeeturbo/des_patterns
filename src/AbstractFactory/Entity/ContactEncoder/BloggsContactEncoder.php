<?php


namespace DSP\AbstractFactory\Entity\ContactEncoder;


use DSP\AbstractFactory\Entity\ContactEncoder;

class BloggsContactEncoder extends ContactEncoder
{
    function encode(){
        return "Данные контакта закодированны в формате Blogg";
    }

}
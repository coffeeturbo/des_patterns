<?php
namespace DSP\AbstractFactory\Entity\ApptEncoder;


use DSP\FactoryMethod\Entity\ApptEncoder;

class BloggsContactEncoder extends ApptEncoder
{
    function encode(){
        return "Данные о встрече закодированны в формате Blogg";
    }

}
<?php


namespace DSP\AbstractFactory\Entity\TtdEncoder;


use DSP\AbstractFactory\Entity\TtdEncoder;

class BloggsTtdEncoder extends TtdEncoder
{
    function encode(){
        return "Данные что сделать закодированны в формате Blogg";
    }
}
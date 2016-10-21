<?php

namespace DSP\Decorator\Request\Entity\ProcessRequest;


use DSP\Decorator\Request\Entity\ProcessRequest;

abstract class DecorateProcess extends ProcessRequest
{
    protected $proccess;
    public function __construct(ProcessRequest $processRequest){
        $this->proccess = $processRequest;
    }
}
<?php

namespace DSP\Decorator\Request\Entity;


abstract class ProcessRequest
{
    abstract function process(RequestHelper $request);
}
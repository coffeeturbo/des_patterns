<?php

namespace DSP\Decorator\Request\Entity\ProcessRequest;


use DSP\Decorator\Request\Entity\ProcessRequest;
use DSP\Decorator\Request\Entity\RequestHelper;

class MainProcess extends ProcessRequest
{
    function process(RequestHelper $helper){
        print __CLASS__." выполнение запроса <br>";
    }

}
<?php

namespace DSP\Decorator\Request\Entity\ProcessRequest\DecorateProcess;


use DSP\Decorator\Request\Entity\ProcessRequest;
use DSP\Decorator\Request\Entity\ProcessRequest\DecorateProcess;
use DSP\Decorator\Request\Entity\RequestHelper;

class AuthenticationRequest extends DecorateProcess
{
    function process(RequestHelper $request){
        $this->proccess->process($request);
        print __CLASS__." выполнение Аутентификации <br>";
    }

}
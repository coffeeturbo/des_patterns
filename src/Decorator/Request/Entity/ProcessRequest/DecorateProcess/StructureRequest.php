<?php

namespace DSP\Decorator\Request\Entity\ProcessRequest\DecorateProcess;


use DSP\Decorator\Request\Entity\ProcessRequest\DecorateProcess;
use DSP\Decorator\Request\Entity\RequestHelper;

class StructureRequest extends DecorateProcess
{
    function process(RequestHelper $request ){
        $this->proccess->process($request);
        print __CLASS__." выполнение Структурирование <br>";
    }

}
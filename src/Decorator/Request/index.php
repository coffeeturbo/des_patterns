<?php
namespace DSP\Decorator\Request;

use DSP\Decorator\Request\Entity\ProcessRequest\DecorateProcess\AuthenticationRequest;
use DSP\Decorator\Request\Entity\ProcessRequest\DecorateProcess\LogRequest;
use DSP\Decorator\Request\Entity\ProcessRequest\MainProcess;
use DSP\Decorator\Request\Entity\RequestHelper;

require __DIR__."/../../../vendor/autoload.php";



$authRequest = new LogRequest(
    new AuthenticationRequest(new MainProcess())
);

$authRequest->process(new RequestHelper());

/**
 * DSP\Decorator\Request\Entity\ProcessRequest\MainProcess выполнение запроса
 * DSP\Decorator\Request\Entity\ProcessRequest\DecorateProcess\AuthenticationRequest выполнение Аутентификации
 * DSP\Decorator\Request\Entity\ProcessRequest\DecorateProcess\LogRequest выполнение регистрации запроса
 */


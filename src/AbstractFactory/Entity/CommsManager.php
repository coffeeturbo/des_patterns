<?php
namespace DSP\AbstractFactory\Entity;


abstract class CommsManager
{
    CONST APPT = 1;
    CONST TTD = 2;
    CONST CONTACT = 3;

    abstract function getHeaderText(): string;
    abstract function make(int $flag);
    abstract function getFooterText(): string;
}
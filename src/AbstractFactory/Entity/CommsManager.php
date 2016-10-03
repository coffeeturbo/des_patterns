<?php
namespace DSP\AbstractFactory\Entity;


abstract class CommsManager
{
    abstract function getHeaderText(): string;
    abstract function getApptEncoder(): ApptEncoder;
    abstract function getContactEncoder(): ContactEncoder;
    abstract function getTtdEncoder(): TtdEncoder;
    abstract function getFooterText(): string;
}
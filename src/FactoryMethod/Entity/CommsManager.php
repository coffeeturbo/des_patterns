<?php
namespace DSP\FactoryMethod\Entity;

abstract class CommsManager
{
    abstract public function getHeaderText(): string;
    abstract public function getAppEncoder(): ApptEncoder;
    abstract public function getFooterText(): string;
}
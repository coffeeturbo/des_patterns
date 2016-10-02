<?php
namespace DSP\Singletone\Entity;


class Preferences
{
    private $props = [];
    private static $instance;

    private function __construct(){}

    public function getProperty($key)
    {
        return $this->props[$key];
    }

    public function setProperty($key, $value)
    {
        $this->props[$key] = $value;
        return $this;
    }

    public static function getInstance()
    {
        return empty(self::$instance) ? self::$instance = new Preferences() : self::$instance;
    }



}
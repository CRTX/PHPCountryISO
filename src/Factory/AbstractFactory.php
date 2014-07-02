<?php

namespace CRTX\CountryISO\Factory;

abstract class AbstractFactory
{
    protected $namespace;

    public function __construct()
    {
        $this->setNamespace();
    }

    public function build($string, array $arguments = array())
    {
        $reflection = new \ReflectionClass($this->namespace . $string);
        return $reflection->newInstanceArgs($arguments);
    }

    abstract protected function setNamespace();
}

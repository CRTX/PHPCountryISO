<?php

namespace CRTX\CountryISO\Factory;

abstract class AbstractFactory
{
    protected $namespace;
    protected $buildArguments;

    abstract protected function setNamespace();

    public function __construct()
    {
        $this->setNamespace();
    }

    public function build($string, array $arguments = array())
    {
        $this->modifyBuildArguments($arguments);
        $reflection = new \ReflectionClass($this->namespace . $string);
        return $reflection->newInstanceArgs($this->buildArguments);
    }

    protected function modifyBuildArguments($arguments)
    {
        $this->buildArguments = $arguments;
    }

}

<?php

namespace CRTX\CountryISO\Mapper\ArrayMapper;

use CRTX\CountryISO\Factory\AbstractFactory;
use CRTX\CountryISO\Entity\EntityFactory;

class MapperFactory extends AbstractFactory
{
    protected $EntityFactory;

    public function __construct(EntityFactory $EntityFactory = null)
    {
        parent::__construct();
        $this->EntityFactory = $EntityFactory;
    }

    protected function setNamespace()
    {
        $this->namespace = 'CRTX\\CountryISO\\Mapper\\';
    }

    protected function modifyBuildArguments($arguments)
    {
        $this->buildArguments = $arguments;

        array_unshift($this->buildArguments, $this->EntityFactory);
    }
}

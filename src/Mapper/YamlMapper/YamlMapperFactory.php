<?php

namespace CRTX\CountryISO\Mapper\YamlMapper;

use CRTX\CountryISO\Factory\AbstractFactory;
use CRTX\CountryISO\Entity\EntityFactory;

class YamlMapperFactory extends AbstractFactory
{
    protected $EntityFactory;
    protected $buildArguments;

    public function __construct(EntityFactory $EntityFactory = null)
    {
        parent::__construct();
        $this->EntityFactory = $EntityFactory;
    }

    protected function setNamespace()
    {
        $this->namespace = 'CRTX\\CountryISO\\Mapper\\YamlMapper\\';
    }

    protected function modifyBuildArguments($arguments)
    {
        $this->buildArguments = $arguments;

        array_unshift($this->buildArguments, $this->EntityFactory);
    }
}

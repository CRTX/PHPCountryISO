<?php

namespace CRTX\CountryISO\Mapper;

use CRTX\CountryISO\Factory\AbstractFactory;

class MapperFactory extends AbstractFactory
{
    protected function setNamespace()
    {
        $this->namespace = 'CRTX\\CountryISO\\Mapper\\';
    }
}

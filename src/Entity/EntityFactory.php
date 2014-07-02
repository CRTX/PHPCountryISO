<?php

namespace CRTX\CountryISO\Entity;

use CRTX\CountryISO\Factory\AbstractFactory;

class EntityFactory extends AbstractFactory
{
    protected function setNamespace()
    {
        $this->namespace = 'CRTX\\CountryISO\\Entity\\';
    }
}

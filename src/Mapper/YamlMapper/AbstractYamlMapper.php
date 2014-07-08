<?php

namespace CRTX\CountryISO\Mapper\YamlMapper;

use CRTX\CountryISO\Entity\EntityFactory;

class AbstractYamlMapper
{
    protected $unmappedArray = array();
    protected $EntityFactory;
    protected $Entity;
    protected $mappedEntity = array();

    public function __construct(EntityFactory $EntityFactory = null, array $array = array())
    {
        $this->EntityFactory = $EntityFactory;
        $this->array = $array;
    }
}

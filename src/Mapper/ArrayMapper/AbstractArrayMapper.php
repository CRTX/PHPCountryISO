<?php

namespace CRTX\CountryISO\Mapper\ArrayMapper;

use CRTX\CountryISO\Entity\EntityFactory;

class AbstractArrayMapper
{
    protected $unmappedArray = array();
    protected $EntityFactory;
    protected $Entity;
    protected $mappedEntity = array();

    public function __construct(EntityFactory $EntityFactory = null, array $array = array())
    {
        $this->EntityFactory = $EntityFactory;
        $this->unmappedArray = $array;
    }
}

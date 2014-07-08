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
        $this->unmappedArray = $array;
    }

    protected function hasKeys($array, array $keys)
    {
        if (!is_array($array) || empty($array)) {
            return false;
        }

        foreach ($keys as $key => $keyName) {
            if (!array_key_exists($keyName, $array)){
                return false;
            }
        }

        return true;
    }
}

<?php

namespace CRTX\CountryISO\Mapper\YamlMapper;

use CRTX\CountryISO\Entity\Country;

class CountryMapper extends AbstractYamlMapper
{
    public function getAll()
    {
        $array = array();
        foreach($this->array as $countryArray => $countryNameArray) {
            foreach($countryNameArray as $countryName => $countryParameterArray) {
                $Country = new Country();
                $Country->setName($countryName);
                $Country->setCode($countryParameterArray['ISO 3166-1 Alpha-2']);
                array_push($array, $Country);
            }
        }

        return $array;
    }
}

<?php

namespace CRTX\CountryISO\Mapper\ArrayMapper;

use CRTX\CountryISO\Entity\Country;

class CountryISOMapper extends AbstractEntityMapper
{
    public function getAll(array $unmappedArray = array())
    {
        if (!empty($unmappedArray))
        {
            $this->unmappedArray = $unmappedArray;
        }

        foreach ($this->unmappedArray as $countryArray => $countryNameArray) {
            $this->Entity = $this->mapCountry($countryNameArray);
        }

        return $this->mappedEntity;
    }

    protected function mapCountry(array $countryNameArray)
    {
        foreach ($countryNameArray as $countryName => $countryParameterArray) {
            $this->Entity = new Country();
            $this->Entity->setName($countryName);
            $this->Entity->setCode($countryParameterArray['Code']);
            $this->mapDivision($countryParameterArray);
            array_push($this->mappedEntity, $this->Entity);
        }
    }

    protected function mapDivision($countryParameterArray = array())
    {
        if
        (
            is_array($countryParameterArray) &&
            !array_key_exists
            (
                'AdministrativeDivision',
                $countryParameterArray
            )
        )
        {
            return false;
        }

        $AdministrativeDivisionArray = 
            $countryParameterArray['AdministrativeDivision'];

        if ( !is_array($AdministrativeDivisionArray)) {
            return false;
        }

        foreach
        (
            $AdministrativeDivisionArray
            as $divisionName => $divisionProperty
        )
        {
            $AdministrativeDivision = $this->EntityFactory
                ->build('AdministrativeDivision');
            $AdministrativeDivision->setName($divisionName);

            if
            (
                is_array($divisionProperty) &&
                array_key_exists('Code', $divisionProperty)
            )
            {
                    $AdministrativeDivision
                        ->setCode(
                            $divisionProperty['Code']
                        );
            }
            $this->Entity->add($AdministrativeDivision);
        }
    }
}

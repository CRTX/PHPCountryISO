<?php

namespace CRTX\CountryISO\Entity;

class Country extends AbstractPlace implements CountryInterface
{
    public function add(AdministrativeDivision $AdministrativeDivision)
    {
        array_push($this->place, $AdministrativeDivision);
    }
}

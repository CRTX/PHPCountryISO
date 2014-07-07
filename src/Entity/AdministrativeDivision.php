<?php

namespace CRTX\CountryISO\Entity;

class AdministrativeDivision extends AbstractPlace implements AdministrativeDivisionInterface
{
    public function add(City $City)
    {
        array_push($this->place, $City);
    }
}

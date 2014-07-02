<?php

namespace CRTX\CountryISO\Entity;

class Country
{
    protected $subDivision;

    public function addSubDivision(SubDivision $SubDivision)
    {
        $this->SubDivision->add($SubDivision);
    }

    public function getSubDivisions()
    {
        return $this->subDivisions;
    }
}

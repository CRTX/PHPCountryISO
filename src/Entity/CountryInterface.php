<?php

namespace CRTX\CountryISO\Entity;

interface CountryInterface extends PlaceInterface
{
    public function add(AdministrativeDivision $division);
}

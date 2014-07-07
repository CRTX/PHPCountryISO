<?php

namespace CRTX\CountryISO\Entity;

interface AdministrativeDivisionInterface extends PlaceInterface
{
    public function add(City $City);
}

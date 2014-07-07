<?php

namespace CRTX\CountryISO\Entity;

interface PlaceInterface extends \Iterator
{
    public function setName($string);
    public function getName();
}

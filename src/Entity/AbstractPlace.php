<?php

namespace CRTX\CountryISO\Entity;

abstract class Place
{
    protected $name;

    public function setName($string)
    {
        $this->name = $string;
    }

    public function getName()
    {
        return $this->name;
    }

}

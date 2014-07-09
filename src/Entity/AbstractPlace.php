<?php

namespace CRTX\CountryISO\Entity;

abstract class AbstractPlace implements PlaceInterface
{
    protected $name;
    protected $code;
    protected $position = 0;
    protected $place = array();

    public function __construct()
    {
        $this->position = 0;
    }

    public function setName($string)
    {
        $this->name = $string;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setCode($string)
    {
        $this->code = $string;
    }

    public function getCode($key = null)
    {
        if (!empty($key) && is_string($key)) {
            return $this->code[$key];
        }
        return $this->code;
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function current()
    {
        return $this->place[$this->position];
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        ++$this->position;
    }

    public function valid()
    {
        return isset($this->place[$this->position]);
    }
}

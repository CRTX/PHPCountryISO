<?php

namespace CRTX\CountryISO\Entity;

class SubDivisionIterator implements \Iterator
{
    private $position = 0;

    private $subdivisions = [];

    public function __construct()
    {
        $this->position = 0;
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function current()
    {
        return $this->subdivision[$this->position];
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
        return isset($this->subdivision[$this->position]);
    }

    public function add(SubDivision $SubDivision)
    {
        array_push($this->subdivision, $SubDivision);
    }
}

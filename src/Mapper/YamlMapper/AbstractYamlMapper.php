<?php

namespace CRTX\CountryISO\Mapper\YamlMapper;

class AbstractYamlMapper
{
    protected $array;

    public function __construct(array $array = array())
    {
        $this->array = $array;
    }
}

<?php

use CRTX\CountryISO\Mapper\YamlMapper\YamlMapperFactory;
use CRTX\CountryISO\Entity\EntityFactory;
use Symfony\Component\Yaml\Parser;

class CountryMapperTest extends \PHPUnit_Framework_TestCase
{
    public function testCountryMapping()
    {
        $EntityFactory = new EntityFactory();
        $MapperFactory = new YamlMapperFactory($EntityFactory);
        $CountryMapper = $MapperFactory->build('CountryMapper', array(__DIR__ . '/../../countries.yml'));
        $Country = $EntityFactory->build('Country');
        $all = $CountryMapper->getAll();
    }
}

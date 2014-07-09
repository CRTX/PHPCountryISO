<?php

use CRTX\CountryISO\Mapper\YamlMapper\YamlMapperFactory;
use CRTX\CountryISO\Entity\EntityFactory;
use Symfony\Component\Yaml\Parser;

class CountryMapperTest extends \PHPUnit_Framework_TestCase
{
    public function testCountryMapping()
    {
        $Factory = new YamlMapperFactory();
        $yamlArrayMock = array(
            'Country' => array(
                'United States' => null)
        );
        $CountryMapper = $Factory
            ->build(
                'CountryMapper',
                array($yamlArrayMock)
        );
        $Country = $CountryMapper->getAll()[0];
        $this->assertEquals($Country->getName(), 'United States');
    }
}

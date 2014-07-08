<?php

use CRTX\CountryISO\Mapper\YamlMapper\YamlMapperFactory;
use Symfony\Component\Yaml\Parser;

class YamlMapperFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testYamlInstantiation()
    {
        $Factory = new YamlMapperFactory();
        $CountryMapper = $Factory->build('CountryMapper', array(__DIR__ . '/../../countries.yml'));
        $this->assertInstanceOf('CRTX\\CountryISO\\Mapper\\YamlMapper\\CountryMapper', $CountryMapper);
    }
}

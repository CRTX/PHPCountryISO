<?php

use CRTX\CountryISO\Mapper\YamlMapper\YamlMapperFactory;
use Symfony\Component\Yaml\Parser;

class YamlMapperFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testInstantiation()
    {
        $Factory = new YamlMapperFactory();
        $CountryMapper = $Factory
            ->build(
                'CountryMapper',
                array()
        );
        $this->assertInstanceOf(
            'CRTX\\CountryISO\\Mapper\\YamlMapper\\CountryMapper',
            $CountryMapper
        );
    }

}

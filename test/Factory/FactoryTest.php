<?php

use CRTX\CountryISO\Entity\EntityFactory;
use Symfony\Component\Yaml\Parser;

class FactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testEntityFactory()
    {
        $EntityFactory = new EntityFactory();
        $Country = $EntityFactory->build('Country');
        $this->assertInstanceOf('CRTX\\CountryISO\\Entity\\Country', $Country);
    }

    public function testParser()
    {
        $yaml = new Parser();

        $array = $yaml->parse(file_get_contents(__DIR__ . '/../../countries.yml'));

        $this->assertEquals(key($array), 'Country');
    }
}

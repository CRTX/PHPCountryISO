<?php

use CRTX\CountryISO\Entity\EntityFactory;

class FactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testEntityFactory()
    {
        $EntityFactory = new EntityFactory();
        $Country = $EntityFactory->build('Country');
        $this->assertInstanceOf('CRTX\\CountryISO\\Entity\\Country', $Country);
    }
}

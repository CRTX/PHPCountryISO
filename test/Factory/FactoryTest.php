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

    public function testInheritance()
    {
        $EntityFactory = new EntityFactory();
        $Country = $EntityFactory->build('Country');
        $AdministrativeDivision = $EntityFactory->build('AdministrativeDivision');
        $Country->add($AdministrativeDivision);
        foreach($Country as $Division) {
            $this->assertInstanceOf(
                'CRTX\\CountryISO\\Entity\\AdministrativeDivision',
                $Division
            );
        }
    }
}

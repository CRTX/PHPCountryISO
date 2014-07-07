

<?php

namespace CRTX\CountryISO\Entity;

use CRTX\CountryISO\Factory\AbstractFactory;
use Symfony\Component\Yaml\Parser;

class YamlToObjectFactory extends AbstractFactory
{
    protected function setNamespace()
    {
        $this->namespace = 'CRTX\\CountryISO\\Entity\\';
    }

    public function build($string, array $arguments = array())
    {
        $yaml = new Parser();
        if (!empty($arguments) && is_array($arguments)) {
            $filepath = $arguments[0];
        }
        $yamlToArray = $yaml->parse(file_get_contents($filepath));

        if (!empty($arguments) && is_array($arguments)) {
            array_splice($arguments, 0, 0, $yamlToArray);
        }

        $reflection = new \ReflectionClass($this->namespace . $string);
        return $reflection->newInstanceArgs($arguments);
    }
}

<?php

namespace CRTX\CountryISO\Mapper\YamlMapper;

use CRTX\CountryISO\Factory\AbstractFactory;
use CRTX\CountryISO\Entity\EntityFactory;
use Symfony\Component\Yaml\Parser;

class YamlMapperFactory extends AbstractFactory
{
    protected $EntityFactory;

    public function __construct(EntityFactory $EntityFactory = null)
    {
        parent::__construct();
        $this->EntityFactory = $EntityFactory;
    }

    protected function setNamespace()
    {
        $this->namespace = 'CRTX\\CountryISO\\Mapper\\YamlMapper\\';
    }

    public function build($string, array $arguments = array())
    {
        if ($this->validYamlArguments($arguments)) {
            $yaml = new Parser();
            $filepath = array_shift($arguments);
            $yamlToArray = $yaml->parse(file_get_contents($filepath));
            array_unshift($arguments, $yamlToArray);
        }

        array_unshift($arguments, $this->EntityFactory);

        $reflection = new \ReflectionClass($this->namespace . $string);
        return $reflection->newInstanceArgs($arguments);
    }

    protected function validYamlArguments(array & $arguments)
    {
        if (!empty($arguments) && is_array($arguments) && file_exists($arguments[0])) {
            return true;
        }
        return false;
    }
}

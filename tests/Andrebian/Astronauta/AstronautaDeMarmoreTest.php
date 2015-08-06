<?php

namespace Andrebian\Astronauta;

use PHPUnit_Framework_TestCase as PHPUnit;
use Andrebian\Astronauta\AstronautaDeMarmore;

class AstronautaDeMarmoreTest extends PHPUnit
{
    
    /**
     * @test
     */
    public function isGeneratingSomeString()
    {
        $string = AstronautaDeMarmore::randomize();
        $this->assertNotNull($string);
        $this->assertInternalType('string', $string);
        $this->assertNotEquals(0, strlen($string));
    }
    
}

<?php

namespace Faisuc\UnitConversions\Tests;

use Faisuc\UnitConversions\Temperature;
use PHPUnit\Framework\TestCase;

class TemperatureTest extends TestCase
{
    /** @test */
    public function it_can_convert_celsius_to_fahrenheit()
    {
        $fahrenheit = Temperature::fromCelcius(100)->toFahrenheit();

        $this->assertEquals(212, $fahrenheit);
    }
}

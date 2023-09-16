<?php
use PHPUnit\Framework\TestCase;

class FactorialTest extends TestCase {
    public function testFactorialCero() {
        $this->assertEquals(1, calcularFactorial(0));
    }

    public function testFactorialUno() {
        $this->assertEquals(1, calcularFactorial(1));
    }

    public function testFactorialPositivo() {
        $this->assertEquals(24, calcularFactorial(4));
    }

    public function testFactorialNegativo() {
        $this->assertEquals("El factorial no está definido para números negativos.", calcularFactorial(-5));
    }
}

<?php declare(strict_types=1);

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;

final class AssertSameClassTest extends TestCase {
    
    #[Test]
    #[TestDox('Prueba de assertSame: Identico')]
    public function assertSameTest(): void {
        $expected = "Hola";
        $actual = "Hola";
        $this->assertSame($expected, $actual, "Los valores no son iguales");        
    }
    
    #[Test]
    #[TestDox('Prueba de assertNotSame: No es Identico')]
    public function assertNotSameTest(): void {
        $expected = new stdClass;
        $actual = new stdClass;
        $this->assertNotSame($expected, $actual, "Los objetos son iguales");
    }

}
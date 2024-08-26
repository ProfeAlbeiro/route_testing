<?php declare(strict_types=1);

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;

final class FirstTestClassTest extends TestCase {
    
    #[Test]
    #[TestDox('Prueba Inicial: Composer y PHPUnit')]
    public function exampleSome(): void {
        $expected = "Hola";
        $actual = "Hola";
        $this->assertSame($expected, $actual, "Los valores no son iguales");
    }

}
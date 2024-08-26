<?php declare(strict_types=1);

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;

final class AssertEqualsClassTest extends TestCase {
    
    #[Test]
    #[TestDox('Prueba de assertEquals con Fechas: Igual')]
    public function assertEqualsDatesTest(): void {
        $expected = new DateTimeImmutable("2024-04-01 15:00:35");
        $actual = new DateTimeImmutable("2024-04-01 15:00:35");
        $this->assertEquals($expected, $actual, "Las fechas no son iguales");
    }
    
    #[Test]
    #[TestDox('Prueba de assertEquals con archivos: Igual')]
    public function assertEqualsFilesTest(): void {
        $expected = new DOMDocument;
        $expected->loadXML("<foo><bar/></foo>");
        $actual = new DOMDocument;
        $actual->loadXML("<bar><foo/></bar>");        
        $this->assertEquals($expected, $actual, "Los archivos no son iguales");
    }

}
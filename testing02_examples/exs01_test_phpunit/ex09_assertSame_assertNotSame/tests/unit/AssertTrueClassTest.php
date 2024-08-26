<?php declare(strict_types=1);

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;

final class AssertTrueClassTest extends TestCase {
    
    #[Test]
    #[TestDox('Prueba de assertTrue')]
    public function assertTrueTest(): void {
        $expected = (2 == 2);        
        $this->assertTrue($expected);
    }
    
    #[Test]
    #[TestDox('Prueba de assertNotTrue')]
    public function assertNotTrueTest(): void {
        $expected = (2 == 1);        
        $this->assertNotTrue($expected);
    }

}
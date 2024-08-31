<?php declare(strict_types=1);

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;
use Src\Stub;
use Src\Dependency;

final class StubTest extends TestCase {
    #[Test]
    #[TestDox('Prueba con Stub')]
    public function test_sub(): void {

        // Setup
        $stub = new Stub();
        $dependency = $this->createStub(Dependency::class);
        $dependency->method('doSomething')->willReturn('foo');

        // Action
        $response = $stub->doSomething($dependency);

        // Assertion
        $expected = "Válido";
        $this->assertEquals($expected, $response, "");
    }

}
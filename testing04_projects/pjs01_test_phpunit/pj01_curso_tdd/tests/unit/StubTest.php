<?php declare(strict_types=1);

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;
use Src\FizzBuzz;
use Src\Stub;

final class StubTest extends TestCase {    
    #[Test]
    #[TestDox('Prueba con Stub')]    
    public function test_sub(): void {
        
        // Setup
        $stub = new Stub();
        $dependency = $this-createStub(Dependency::class);
        $dependency->method('doSomething')->willReturn('foo');

        // Action
        $result = $stub->doSomething($dependency);
        
        // Assertion
        $expected = "foo";
        $this->assertEquals($expected, $result, "");
    }

}
<?php declare(strict_types=1);

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;
use Src\FizzBuzz;

final class FizzBuzzTest extends TestCase {
    /** 
     * Devuelve Fizz si el número es divisible por 3
     * Devuelve Buzz si el número es divisible por 5
     * Devuelve FizzBuzz si el número es divisible por 3 y 5
    */
    #[Test]
    #[TestDox('Prueba de Fizz Buzz')]    
    public function fizz_buzz(): void {
        // Setup
        $fb = new FizzBuzz();
        // Action
        $actual = $fb->generateOutput(15);
        // Assertion
        $expected = ["1","2","Fizz","4","Buzz","Fizz","7","8","Fizz","Buzz","11","Fizz","13","14","FizzBuzz"];
        $this->assertEquals($expected, $actual,"NO ES IGUAL: Los arreglos no son iguales");
    }

}
<?php declare(strict_types=1);

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class StackTest extends TestCase {

    #[DataProvider('dataProvider')]
    #[TestDox('Al Sumar el $num1 con $num2 el resultado es $expected')]
    #[Test]
    public function sumar(int $expected, int $num1, int $num2): void {

        // Comprobaciones de afirmaciones
        $this->assertSame($expected, $num1 + $num2);
    }

    public static function dataProvider(){

        return [
            'data set 1' => [0, 0, 0],
            'data set 2' => [1, 0, 1],
            'data set 3' => [1, 1, 0],
            'data set 4' => [3, 1, 1]
        ];

    }

}
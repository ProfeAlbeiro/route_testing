<?php declare(strict_types=1);

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class FirstTestClassTest extends TestCase {

    #[Test]
    #[TestDox('Al Sumar el $num1 con $num2 el resultado es $expected')]
    #[DataProvider('dataProvider')]
    public function sumar(int $expected, int $num1, int $num2): void {

        $actual = $num1 + $num2;
        $this->assertSame($expected, $actual, "NO ES IDENTICA: La suma de $num1 con $num2 No puede ser $expected");
    }

    public static function dataProvider() {

        return [
            'data set 1' => [0, 0, 0],
            'data set 2' => [1, 0, 1],
            'data set 3' => [1, 1, 0],
            'data set 4' => [3, 1, 1]
        ];

    }

}
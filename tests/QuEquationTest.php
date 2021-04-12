<?php

use PHPUnit\Framework\TestCase;
use Loginov\Exception;
use Loginov\QuEquation;

class QuEquationTest extends TestCase
{
    public function testQuEquationBad()
    {
        $QuEquationEx = new QuEquation();
        $this->expectExceptionMessage("Ошибка: уравнение не имеет корней.");
        $this->expectException(Exception::class);
        $QuEquationEx->solve(4, 0, 8);
        $QuEquationEx->solve(4, 2, 1);
    }

    public function testQuEquation()
    {
        $QuEquation = new QuEquation();
        $this->assertEquals([5, -5], $QuEquation->solve(-3, 0, 75));
        $this->assertEquals([-3], $QuEquation->solve(0, 3, 9));
        $this->assertEquals([-3], $QuEquation->solve(1, 6, 9));
    }
}

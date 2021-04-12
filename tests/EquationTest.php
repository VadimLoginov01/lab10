<?php

use PHPUnit\Framework\TestCase;
use Loginov\Exception;
use Loginov\Line;

class EquationTest extends TestCase
{
    public function testEquation()
    {
        $equation = new Equation();
        $this->assertEquals([-12], $equation->li_solve(6, 72));
        $this->assertEquals([1], $equation->li_solve(-1, 1));
    }

    public function testEquationBad()
    {
        $line = new Line();
        $this->expectExceptionMessage('This line equation does not exist!');
        $this->expectException(Exception::class);
        $equation->li_solve(0, -10);
        $equation->li_solve(0, 10);
    }
}

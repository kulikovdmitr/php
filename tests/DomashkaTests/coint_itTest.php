<?php

namespace Tests\Domashka;

use Domashka\Count;
use PHPUnit\Framework\TestCase;

class CountitTest extends TestCase
{
    public function testNumber1() //Пример из домашнего задания
    {
        $abc = new Count();

        $this->assertEquals(4, $abc->countit(5,442158755745));
    }

    public function testNumber2() //Значение отсутсвует
    {
        $abc = new Count();

        $this->assertEquals(0, $abc->countit(5,100));
    }

    public function testNumber3() //
    {
        $abc = new Count();

        $this->assertEquals(2, $abc->countit(0, 100));
    }

}


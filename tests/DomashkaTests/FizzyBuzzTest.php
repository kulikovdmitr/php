<?php
/**
 * Created by PhpStorm.
 * User: dvkulikov
 * Date: 07.10.2018
 * Time: 18:23
 */

namespace Test\DomashkaTests;

use Domashka\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzyBuzzTest extends TestCase
{
    public function test1()
    {

        $fizzbuzz = new FizzBuzz();
        $this->assertEquals('Buzz', $fizzbuzz->mode(5));
    }

    public function test2()
    {

        $fizzbuzz = new FizzBuzz();
        $this->assertEquals('Fizz', $fizzbuzz->mode(3));
    }

    public function test3()
    {

        $fizzbuzz = new FizzBuzz();
        $this->assertEquals('Buzz', $fizzbuzz->mode(10));
    }

    public function test4()
    {

        $fizzbuzz = new FizzBuzz();
        $this->assertEquals('FizzBuzz', $fizzbuzz->mode(15));
    }
}

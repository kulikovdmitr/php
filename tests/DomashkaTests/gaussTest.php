<?php

namespace Tests\Domashka;
use Domashka\graussn;
use PHPUnit\Framework\TestCase;

class gaussTest extends TestCase
{
    private $number;

    public function setUp()
    {
        $this->number = new Graussn();
    }

    public function testOne()
    {
        // Arrange
        $number = new Graussn();

        // Act
        $actual = $number->grauss(3);

        // Assert
        $this->assertEquals('6', $actual);
    }

    public function testTwo()
    {
        // Arrange
        $number = new Graussn();

        // Act
        $actual = $number->grauss(100);

        // Assert
        $this->assertEquals('5050', $actual);
    }


    public function testThree()
    {
        // Arrange
        $number = new Graussn();

        // Act
        $actual = $number->grauss(abcd);

        // Assert
        $this->assertEquals('abcd', $actual);
    }


}


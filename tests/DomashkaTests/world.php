<?php
/**
 * Created by PhpStorm.
 * User: dvkulikov
 * Date: 29.09.2018
 * Time: 22:35
 */

namespace Tests\Domashka;
use Domashka\World;
use PHPUnit\Framework\TestCase;

class WorldTest extends TestCase
{

    private $str;

    public function setUp()
    {
        $this->str = new World();
    }

    public function testOne()
    {
        // Arrange
        $str = new World();

        // Act
        $actual = $str->reverse('world');

        // Assert
        $this->assertEquals('dlrow', $actual);
    }

    public function testNumber()
    {
        $this->assertEquals('123456', $this->str->reverse('654321'));
    }

}



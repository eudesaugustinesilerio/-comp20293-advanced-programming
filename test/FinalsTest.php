<?php
require_once __DIR__ . '/../src/Finals.php';

class FinalsTest extends \PHPUnit\Framework\TestCase
{
    public function testMod()
    {
        $finals = new Finals (8);
        $result = $finals->mod(2);

        $this->assertEquals(0, $result);
    }

    public function testModWithException()
    {
        $this->expectException(InvalidArgumentException::class);

        $finals = new Finals (2);
        $result = $finals->mod(15);
    }

    public function testModWithException1()
    {
        $this->expectException(InvalidArgumentException::class);

        $finals = new Finals (2);
        $result = $finals->mod('X');
    }

    public function testMod1()
    {
        $finals = new Finals (20);
        $result = $finals->mod(2);

        $this->assertEquals(0, $result);
    }

    public function testMod2()
    {
        $finals = new Finals (15);
        $result = $finals->mod(3);

        $this->assertEquals(0, $result);
    }

}
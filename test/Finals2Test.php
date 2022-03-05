<?php
require_once __DIR__ . '/../src/Finals2.php';

class Finals2Test extends \PHPUnit\Framework\TestCase
{
    public function testGetName()
    {
        $finals2 = new Finals2();
        $finals2->setName('Eudes');
        $this->assertEquals($finals2->getName(), 'Eudes');
    }

    public function testGetAge()
    {
        $finals2 = new Finals2();
        $finals2->setAge(21);
        $this->assertEquals($finals2->getAge(), 21);
    }

    public function testFavColor()
    {
        $finals2 = new Finals2();
        $finals2->setFavColor('Cyan');
        $this->assertEquals($finals2->getFavColor(), 'Cyan');
    }

    public function testGetNameCheckString()
    {
        $finals2 = new Finals2();
        $finals2 ->setName('Eudes');
        $this->assertIsString($finals2->getName(), 'Eudes');
    }

    public function testGetAgeCheckInt()
    {
        $finals2 = new Finals2();
        $finals2->setAge(21);
        $this->assertIsInt($finals2->getAge(), 21);
    }

    public function testGetAgeCheckNumeric()
    {
        $finals2 = new Finals2();
        $finals2->setAge(21);
        $this->assertIsNumeric($finals2->getAge(), 21);
    }
    
    public function testFaveColorCheckString()
    {
        $finals2 = new Finals2();
        $finals2->setFavColor('Cyan');
        $this->assertIsString($finals2->getFavColor(), 'Cyan');
    }

    public function testGetTogetherInput()
    {
        $finals2 = new Finals2();
        $finals2->setTogetherInput('Eudes', 21, 'Cyan');
        $this->assertEquals($finals2->getTogetherInput(), 'Eudes', 21, 'Cyan');
    }

}
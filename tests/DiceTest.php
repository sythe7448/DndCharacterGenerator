<?php
namespace Tests;


use DND\Generators\Dice;
use PHPUnit\Framework\TestCase;

class DiceTest extends TestCase
{
    /**
     * @var Dice
     */
    private $_class;

    public function setUp (): void
    {
        parent::setUp();
        $this->_class = new Dice();

    }


    public function testD4 () : void
    {
        $dieSize = 4;
        for ($i = 1; $i <= ($dieSize * 3); $i++) {
            $this->assertLessThanOrEqual($dieSize, $this->_class->d4());
            $this->assertIsInt($this->_class->d4());
            $this->assertGreaterThan(0, $this->_class->d4());
        }
    }

    public function testD6 () : void
    {
        $dieSize = 6;
        for ($i = 1; $i <= ($dieSize * 3); $i++) {
            $this->assertLessThanOrEqual($dieSize, $this->_class->d6());
            $this->assertIsInt($this->_class->d6());
            $this->assertGreaterThan(0, $this->_class->d6());
        }
    }

    public function testD10 () : void
    {
        $dieSize = 10;
        for ($i = 1; $i <= ($dieSize * 3); $i++) {
            $this->assertLessThanOrEqual($dieSize, $this->_class->d10());
            $this->assertIsInt($this->_class->d10());
            $this->assertGreaterThan(0, $this->_class->d10());
        }
    }

    public function testD12 () : void
    {
        $dieSize = 12;
        for ($i = 1; $i <= ($dieSize * 3); $i++) {
            $this->assertLessThanOrEqual($dieSize, $this->_class->d12());
            $this->assertIsInt($this->_class->d12());
            $this->assertGreaterThan(0, $this->_class->d12());
        }
    }

    public function testD20 () : void
    {
        $dieSize = 20;
        for ($i = 1; $i <= ($dieSize * 3); $i++) {
            $this->assertLessThanOrEqual($dieSize, $this->_class->d20());
            $this->assertIsInt($this->_class->d20());
            $this->assertGreaterThan(0, $this->_class->d20());
        }
    }

    public function testD100 () : void
    {
        $dieSize = 100;
        for ($i = 1; $i <= ($dieSize * 3); $i++) {
            $this->assertLessThanOrEqual($dieSize, $this->_class->d100());
            $this->assertIsInt($this->_class->d100());
            $this->assertGreaterThan(0, $this->_class->d100());
        }
    }
}
<?php
namespace Tests;


use DND\Generators\StatGenerator;
use PHPUnit\Framework\TestCase;

class StatGeneratorTest extends TestCase
{
    /**
     * @var StatGenerator
     */
    private $_class;

    public function setUp (): void
    {
        parent::setUp();
        $this->_class = new StatGenerator();

    }


    public function testStatGen (): void
    {
        $statMax = 18;
        for ($i = 1; $i <= ($statMax * 3); $i++) {
            $this->assertLessThanOrEqual($statMax, $this->_class->statGen());
            $this->assertIsInt($this->_class->statGen());
            $this->assertGreaterThan(0, $this->_class->statGen());
        }
    }

    public function testHeroStatGen (): void
    {
        $statMax = 18;
        for ($i = 1; $i <= ($statMax * 3); $i++) {
            $this->assertLessThanOrEqual($statMax, $this->_class->heroStatGen());
            $this->assertIsInt($this->_class->heroStatGen());
            $this->assertGreaterThan(0, $this->_class->heroStatGen());
        }
    }

    public function testNpcStats (): void
    {
        $statMax = 18;
        $stats = $this->_class->npcStats();
        $statMaxArray = [18, 18, 18, 18, 18, 18];
        $this->assertIsArray($this->_class->npcStats());
        for ($i = 1; $i <= ($statMax * 3); $i++) {
            foreach ($stats as $key => $value) {
                $this->assertLessThanOrEqual($statMaxArray, $value);
                $this->assertIsInt($value);
                $this->assertGreaterThan(0, $value);
            }
        }
    }

    public function testHeroStats (): void
    {
        $statMax = 18;
        $stats = $this->_class->heroStats();
        $statMaxArray = [18, 18, 18, 18, 18, 18];
        $this->assertIsArray($this->_class->heroStats());
        for ($i = 1; $i <= ($statMax * 3); $i++) {
            foreach ($stats as $key => $value) {
                $this->assertLessThanOrEqual($statMaxArray, $value);
                $this->assertIsInt($value);
                $this->assertGreaterThan(0, $value);
            }
        }
    }

}
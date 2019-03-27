<?php
namespace Tests;

use DND\Character\Dependencies\Stats;
use PHPUnit\Framework\TestCase;

class StatsTest extends TestCase
{
    /**
     * @var Stats
     */
    private $_class;

    public function setUp (): void
    {
        parent::setUp();
        $this->_class = new Stats(12, 18, 10, 11, 14, 16);

    }

    public function testStrengthGetter (): void
    {
        $this->assertEquals(12, $this->_class->getStrength());
        $this->assertIsInt($this->_class->getStrength());
    }

    public function testDexterityGetter (): void
    {
        $this->assertEquals(18, $this->_class->getDexterity());
        $this->assertIsInt($this->_class->getDexterity());
    }

    public function testConstitutionGetter (): void
    {
        $this->assertEquals(10, $this->_class->getConstitution());
        $this->assertIsInt($this->_class->getConstitution());

    }

    public function testIntelligenceGetter (): void
    {
        $this->assertEquals(11, $this->_class->getIntelligence());
        $this->assertIsInt($this->_class->getIntelligence());

    }

    public function testWisdomGetter (): void
    {
        $this->assertEquals(14, $this->_class->getWisdom());
        $this->assertIsInt($this->_class->getWisdom());

    }

    public function testCharismaGetter (): void
    {
        $this->assertEquals(16, $this->_class->getCharisma());
        $this->assertIsInt($this->_class->getCharisma());

    }
}
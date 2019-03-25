<?php
namespace Tests;

use DND\Character\Dependencies\AbilityScores;
use DND\Character\Dependencies\Stats;
use PHPUnit\Framework\TestCase;

class AbilityScoresTest extends TestCase
{
    /**
     * @var AbilityScores
     */
    private $_class;

    public function setUp (): void
    {
        parent::setUp();
        $this->_class = new AbilityScores();
        $this->_class->setStrength(12);
        $this->_class->setDexterity(18);
        $this->_class->setConstitution(10);
        $this->_class->setIntelligence(11);
        $this->_class->setWisdom(14);
        $this->_class->setCharisma(16);

    }

    public function testStrengthAbilityScoreGetter (): void
    {
        $this->assertEquals(1, $this->_class->getStrengthScore());
        $this->assertIsInt($this->_class->getStrengthScore());
    }
    public function testDexterityAbilityScoreGetter (): void
    {
        $this->assertEquals(4, $this->_class->getDexterityScore());
        $this->assertIsInt($this->_class->getDexterityScore());
    }
    public function testConstitutionAbilityScoreGetter (): void
    {
        $this->assertEquals(0, $this->_class->getConstitutionScore());
        $this->assertIsInt($this->_class->getConstitutionScore());
    }
    public function testIntelligenceAbilityScoreGetter (): void
    {
        $this->assertEquals(1, $this->_class->getIntelligenceScore());
        $this->assertIsInt($this->_class->getIntelligenceScore());
    }
    public function testWisdomAbilityScoreGetter (): void
    {
        $this->assertEquals(2, $this->_class->getWisdomScore());
        $this->assertIsInt($this->_class->getWisdomScore());
    }
    public function testCharismaAbilityScoreGetter (): void
    {
        $this->assertEquals(3, $this->_class->getCharismaScore());
        $this->assertIsInt($this->_class->getCharismaScore());
    }


}
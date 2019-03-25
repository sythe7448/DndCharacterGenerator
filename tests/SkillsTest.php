<?php
namespace Tests;

use DND\Character\Dependencies\AbilityScores;
use DND\Character\Dependencies\Skills;
use DND\Character\Dependencies\Stats;
use PHPUnit\Framework\TestCase;

class SkillsTest extends TestCase
{
    /**
     * @var Skills
     */
    private $_class;

    public function setUp (): void
    {
        parent::setUp();
        $this->_class = new Skills();
        $this->_class->setStrength(12);
        $this->_class->setDexterity(18);
        $this->_class->setConstitution(10);
        $this->_class->setIntelligence(11);
        $this->_class->setWisdom(14);
        $this->_class->setCharisma(16);

    }


    public function testGetAcrobatics () : void
    {
        $this->assertEquals(14, $this->_class->getAcrobatics());
        $this->assertIsInt($this->_class->getAcrobatics());
    }

    public function testGetPerformance ()
    {
        $this->assertEquals(13, $this->_class->getPerformance());
        $this->assertIsInt($this->_class->getPerformance());
    }

    public function testGetSleightOfHand ()
    {
        $this->assertEquals(14, $this->_class->getSleightOfHand());
        $this->assertIsInt($this->_class->getSleightOfHand());
    }

    public function testGetArcana ()
    {
        $this->assertEquals(11, $this->_class->getArcana());
        $this->assertIsInt($this->_class->getArcana());
    }

    public function testGetSurvival ()
    {
        $this->assertEquals(12, $this->_class->getSurvival());
        $this->assertIsInt($this->_class->getSurvival());
    }

    public function testGetPerception ()
    {
        $this->assertEquals(12, $this->_class->getPerception());
        $this->assertIsInt($this->_class->getPerception());
    }

    public function testGetAnimalHandling ()
    {
        $this->assertEquals(12, $this->_class->getAnimalHandling());
        $this->assertIsInt($this->_class->getAnimalHandling());
    }

    public function testGetHistory ()
    {
        $this->assertEquals(11, $this->_class->getHistory());
        $this->assertIsInt($this->_class->getHistory());
    }

    public function testGetReligion ()
    {
        $this->assertEquals(11, $this->_class->getReligion());
        $this->assertIsInt($this->_class->getReligion());
    }

    public function testGetStealth ()
    {
        $this->assertEquals(14, $this->_class->getStealth());
        $this->assertIsInt($this->_class->getStealth());
    }

    public function testGetIntimidation ()
    {
        $this->assertEquals(13, $this->_class->getIntimidation());
        $this->assertIsInt($this->_class->getIntimidation());
    }

    public function testGetAthletics ()
    {
        $this->assertEquals(11, $this->_class->getAthletics());
        $this->assertIsInt($this->_class->getAthletics());
    }

    public function testGetNature ()
    {
        $this->assertEquals(11, $this->_class->getNature());
        $this->assertIsInt($this->_class->getNature());
    }

    public function testGetMedicine ()
    {
        $this->assertEquals(12, $this->_class->getMedicine());
        $this->assertIsInt($this->_class->getMedicine());
    }

    public function testGetInvestigation ()
    {
        $this->assertEquals(11, $this->_class->getInvestigation());
        $this->assertIsInt($this->_class->getInvestigation());
    }

    public function testGetInsight ()
    {
        $this->assertEquals(12, $this->_class->getInsight());
        $this->assertIsInt($this->_class->getInsight());
    }

    public function testGetDeception ()
    {
        $this->assertEquals(13, $this->_class->getDeception());
        $this->assertIsInt($this->_class->getDeception());
    }

    public function testGetPersuasion ()
    {
        $this->assertEquals(13, $this->_class->getPersuasion());
        $this->assertIsInt($this->_class->getPersuasion());
    }


}
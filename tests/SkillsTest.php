<?php
namespace Tests;

use DND\Character\Dependencies\Skills;
use DND\Character\Dependencies\AbilityScores;
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
        $abilityScores = new AbilityScores(new Stats(12, 18, 10, 11, 14, 16));
        $this->_class = new Skills($abilityScores);

    }

//    public function testGetProficiencyMod () : void
//    {
//        $this->assertIsInt($this->_class->getProficiencyMod());
//        $this->assertEquals(5, $this->_class->getProficiencyMod());
//    }

    public function testGetAcrobatics () : void
    {
        $this->assertEquals(14, $this->_class->getAcrobatics());
        $this->assertIsInt($this->_class->getAcrobatics());
    }

    public function testGetPerformance () : void
    {
        $this->assertEquals(13, $this->_class->getPerformance());
        $this->assertIsInt($this->_class->getPerformance());
    }

    public function testGetSleightOfHand () : void
    {
        $this->assertEquals(14, $this->_class->getSleightOfHand());
        $this->assertIsInt($this->_class->getSleightOfHand());
    }

    public function testGetArcana () : void
    {
        $this->assertEquals(11, $this->_class->getArcana());
        $this->assertIsInt($this->_class->getArcana());
    }

    public function testGetSurvival () : void
    {
        $this->assertEquals(12, $this->_class->getSurvival());
        $this->assertIsInt($this->_class->getSurvival());
    }

    public function testGetPerception () : void
    {
        $this->assertEquals(12, $this->_class->getPerception());
        $this->assertIsInt($this->_class->getPerception());
    }

    public function testGetAnimalHandling () : void
    {
        $this->assertEquals(12, $this->_class->getAnimalHandling());
        $this->assertIsInt($this->_class->getAnimalHandling());
    }

    public function testGetHistory () : void
    {
        $this->assertEquals(11, $this->_class->getHistory());
        $this->assertIsInt($this->_class->getHistory());
    }

    public function testGetReligion () : void
    {
        $this->assertEquals(11, $this->_class->getReligion());
        $this->assertIsInt($this->_class->getReligion());
    }

    public function testGetStealth () : void
    {
        $this->assertEquals(14, $this->_class->getStealth());
        $this->assertIsInt($this->_class->getStealth());
    }

    public function testGetIntimidation () : void
    {
        $this->assertEquals(13, $this->_class->getIntimidation());
        $this->assertIsInt($this->_class->getIntimidation());
    }

    public function testGetAthletics () : void
    {
        $this->assertEquals(11, $this->_class->getAthletics());
        $this->assertIsInt($this->_class->getAthletics());
    }

    public function testGetNature () : void
    {
        $this->assertEquals(11, $this->_class->getNature());
        $this->assertIsInt($this->_class->getNature());
    }

    public function testGetMedicine () : void
    {
        $this->assertEquals(12, $this->_class->getMedicine());
        $this->assertIsInt($this->_class->getMedicine());
    }

    public function testGetInvestigation () : void
    {
        $this->assertEquals(11, $this->_class->getInvestigation());
        $this->assertIsInt($this->_class->getInvestigation());
    }

    public function testGetInsight () : void
    {
        $this->assertEquals(12, $this->_class->getInsight());
        $this->assertIsInt($this->_class->getInsight());
    }

    public function testGetDeception () : void
    {
        $this->assertEquals(13, $this->_class->getDeception());
        $this->assertIsInt($this->_class->getDeception());
    }

    public function testGetPersuasion () : void
    {
        $this->assertEquals(13, $this->_class->getPersuasion());
        $this->assertIsInt($this->_class->getPersuasion());
    }


}
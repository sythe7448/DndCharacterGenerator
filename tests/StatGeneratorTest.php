<?php

use DND\Character\Dependencies\Stats;
use PHPunit\Framework\TestCase;

class StatGeneratorTest extends TestCase
{
    private $_statsClass;

    public function setUp (): void
    {
        parent::setUp();
        $this->_statsClass = new Stats();
        $this->_statsClass->setStrength(12);
        $this->_statsClass->setDexterity(18);
        $this->_statsClass->setConstitution(10);
        $this->_statsClass->setIntelligence(11);
        $this->_statsClass->setWisdom(14);
        $this->_statsClass->setCharisma(16);

    }

    public function strengthTest (): void
    {
        $this->assertEquals(12, $this->_statsClass->getStrength());
    }

    public function dexterityTest (): void
    {
        $this->assertEquals(18, $this->_statsClass->getDexterity());
    }

    public function constitutionTest (): void
    {
        $this->assertEquals(10, $this->_statsClass->getConstitution());
    }

    public function intelligenceTest (): void
    {
        $this->assertEquals(11, $this->_statsClass->getIntelligence());
    }

    public function wisdomTest (): void
    {
        $this->assertEquals(14, $this->_statsClass->getWisdom());
    }

    public function charismaTest (): void
    {
        $this->assertEquals(16, $this->_statsClass->getCharisma());
    }
}
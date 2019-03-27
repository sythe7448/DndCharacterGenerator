<?php
namespace Tests;

use DND\Character\Dependencies\AbilityScores;
use DND\Character\Dependencies\Skills;
use DND\Character\Dependencies\Stats;
use PHPUnit\Framework\TestCase;
use Factories\RandomStatsFactory;

class ExperiementsTest extends TestCase
{
    /**
     * @var Stats
     */
    private $_class;

    /**
     * @var AbilityScores
     */
    private $_abilityScores;

    /**
     * @var Skills
     */
    private $_skills;

    public function setUp (): void
    {
        parent::setUp();
        $RandomStatsFactory = new RandomStatsFactory();
        $heroStats = $RandomStatsFactory->buildHero();
        $this->_class = $heroStats;
        $this->_abilityScores = new AbilityScores($this->_class);
        $this->_skills = new Skills($this->_abilityScores);

    }

    public function testShowStats (): void
    {
        echo $this->_abilityScores->getDexterityScore();
        var_dump($this->_class);
        var_dump($this->_abilityScores);
        var_dump($this->_skills);

    }




}

<?php
namespace Tests;

use DND\Character\Dependencies\Stat;
use DND\Character\Dependencies\GroupStats;
use DND\Character\Dependencies\AbilityModifier;
use PHPUnit\Framework\TestCase;
use Factories\RandomStatsFactory;
use Exception;

class ExperiementsTest extends TestCase
{

    /**
     * @var Stat
     */
    private $_stat;

    /**
     * @var GroupStats
     */
    private $_groupStats;

    /**
     * @var AbilityModifier
     */
    private $_abilityMod;

    public function setUp (): void
    {
        parent::setUp();
        $RandomStatsFactory = new RandomStatsFactory();
        $heroStats = $RandomStatsFactory->buildHero();

        $stat1 = new Stat('Str', 16);
        $stat2 = new Stat('Dex', 12);
        $stat3 = new Stat('Con', 11);
        $stat4 = new Stat('Int', 18);
        $stat5 = new Stat('Wis', 15);
        $stat6 = new Stat('Cha', 12);

        $groupStats = new GroupStats();

        $groupStats->add($stat1);
        $groupStats->add($stat2);
        $groupStats->add($stat3);
        $groupStats->add($stat4);
        $groupStats->add($stat5);
        $groupStats->add($stat6);

        $this->_groupStats = $groupStats;

        $abilityMod = new AbilityModifier($this->_groupStats, 'Int');
        $this->_abilityMod = $abilityMod;
    }

    public function testGroupStats (): void
    {
        var_dump($this->_groupStats->getStatValue('Str'));
    }

    public function testAbilityMod (): void
    {
        try
        {
            var_dump($this->_abilityMod->getValue());
            echo $this->_abilityMod->getName();
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }




}

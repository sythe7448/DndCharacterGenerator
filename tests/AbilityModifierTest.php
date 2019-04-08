<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use DND\Character\Dependencies\Stat;
use DND\Character\Dependencies\GroupStats;
use DND\Character\Dependencies\AbilityModifier;

class AbilityModifierTest extends TestCase
{

    /**
     * @var AbilityModifier
     */
    private $_class;

    public function setUp (): void
    {
        parent::setUp();
        $stat1 = new Stat('Stat1', 15);
        $stat2 = new Stat('Stat2', 17);
        $groupStats = new GroupStats();
        $groupStats->add($stat1);
        $groupStats->add($stat2);
        $this->_class = new AbilityModifier($groupStats,'Stat1');


    }

    public function testAbilityModifierGetter (): void
    {
        $this->assertEquals(2, $this->_class->getValue());
        $this->assertEquals('Stat1 Modifier', $this->_class->getName());
        $this->assertEquals('Stat1', $this->_class->getBaseStatName());

    }
}
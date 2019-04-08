<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use DND\Character\Dependencies\Stat;
use DND\Character\Dependencies\GroupStats;

class GroupStatsTest extends TestCase
{

    /**
     * @var GroupStats
     */
    private $_class;

    public function setUp (): void
    {
        parent::setUp();
        $stat1 = new Stat('Stat1', 15);
        $stat2 = new Stat('Stat2', 17);
        $this->_class = new GroupStats();
        $this->_class->add($stat1);
        $this->_class->add($stat2);

    }

    public function testGroupStatGetter (): void
    {
        $this->assertIsArray($this->_class->getStats());
        $this->assertIsInt($this->_class->getStatValue('Stat1'));
        $this->assertEquals('Stat2', $this->_class->getStatName('Stat2'));
    }
}
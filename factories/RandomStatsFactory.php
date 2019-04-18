<?php

namespace Factories;

use DND\Generators\StatGenerator;
use DND\Character\Dependencies\Stat;

class RandomStatsFactory
{

    public function buildHeroStat(): Stat
    {
        $name = 'test1';
        $statGen = new StatGenerator();
        $heroStat = $statGen->heroStatGen();
        return new Stat($name, $heroStat);
    }

    public function buildNpc(): Stat
    {
        $name = 'test2';
        $statGen = new StatGenerator();
        $npcStat = $statGen->statGen();
        return new Stat($name,$npcStat);
    }
}
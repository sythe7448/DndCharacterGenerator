<?php

namespace Factories;

use DND\Generators\StatGenerator;
use DND\Character\Dependencies\Stats;

class RandomStatsFactory
{

    public function buildHero(): Stats
    {
        $statGen = new StatGenerator();
        $heroStat = $statGen->heroStats();
        return new Stats(...$heroStat);
    }

    public function buildNpc(): Stats
    {
        $statGen = new StatGenerator();
        $npcStat = $statGen->npcStats();
        return new Stats(...$npcStat);
    }
}
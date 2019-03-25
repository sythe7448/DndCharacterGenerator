<?php
declare (strict_types=1);

namespace DND\Generators;

class StatGenerator extends Dice
{

    public function statGen ()
    {
        $statrolls = [];
        for ($i = 0; $i <= 2; $i++) {
            $statrolls[] = $this->d6();
        }
        return array_sum($statrolls);
    }

    public function herostatgen ()
    {
        $statrolls = [];
        for ($i = 0; $i <= 3; $i++) {
            $statrolls[] = $this->d6();
        }
        asort($statrolls);
        array_shift($statrolls);
        return array_sum($statrolls);
    }

    public function npcStats () : array
    {
        $stats = [];
        for ($i = 0; $i <= 5; $i++) {
            $stats[] = $this->statGen();
        }
        return $stats;
    }

    public function heroStats () : array
    {
        $stats = [];
        for ($i = 0; $i <= 5; $i++) {
            $stats[] = $this->herostatgen();
        }
        return $stats;
    }

}

//$npcStats = npcStats();
//$herostats = $this->heroStats();
//
//$hero = new Skills($herostats[0], $herostats[1], $herostats[2], $herostats[3], $herostats[4], $herostats[5]);
//$npc = new Skills();
//
//$hero->setStrength($herostats[0]);
//$hero->setDexterity($herostats[1]);
//$hero->setConstitution($herostats[2]);
//$hero->setIntelligence($herostats[3]);
//$hero->setWisdom($herostats[4]);
//$hero->setCharisma($herostats[5]);
//
//$npc->setStrength($npcStats[0]);
//$npc->setDexterity($npcStats[1]);
//$npc->setConstitution($npcStats[2]);
//$npc->setIntelligence($npcStats[3]);
//$npc->setWisdom($npcStats[4]);
//$npc->setCharisma($npcStats[5]);
//
//
//var_dump($hero);
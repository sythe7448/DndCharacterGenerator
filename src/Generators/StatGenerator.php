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

    public function heroStatGen ()
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
            $stats[] = $this->heroStatGen();
        }
        return $stats;
    }

}
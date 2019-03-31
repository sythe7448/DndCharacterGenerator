<?php

namespace DND\Character\Dependencies\Races;

use DND\Character\Dependencies\Race;
use DND\Character\Dependencies\Stats;

class HalfOrc extends Race
{


    /**
     * HalfOrc constructor.
     */
    public function __construct ()
    {
        $this->setName('Half-Orc');
        $this->setStats(new Stats(2, 0, 1, 0, 0, 0));
        $this->setSize('Medium');
        $this->setSpeed(30);
        $this->setVision('Darkvision');
        $this->setLanguages(['Common', 'Orc']);
        $this->setFeatures([
            'Menacing' => 'You gain proficiency in the Intimidation skill.',
            'Relentless Endurance' => ' When you are reduced to 0 Hit Points but not killed outright, you can drop to 1 hit point instead. You can’t use this feature again until you finish a Long Rest.',
            'Savage Attacks' => ' When you score a critical hit with a melee weapon Attack, you can roll one of the weapon’s damage dice one additional time and add it to the extra damage of the critical hit.'
        ]);
    }
}
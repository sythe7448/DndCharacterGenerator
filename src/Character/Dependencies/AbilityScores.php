<?php
declare (strict_types=1);

namespace DND\Character\Dependencies;

class AbilityScores extends Stats
{

    /**
     * @return int
     */
    public function getStrengthScore (): int
    {
        return (int)round(($this->getStrength() - 10)/2);
    }


    /**
     * @return int
     */
    public function getDexterityScore (): int
    {
        return (int)round(($this->getDexterity() - 10)/2);
    }


    /**
     * @return int
     */
    public function getConstitutionScore (): int
    {
        return (int)round(($this->getConstitution() - 10)/2);
    }


    /**
     * @return int
     */
    public function getIntelligenceScore (): int
    {
        return (int)round(($this->getIntelligence() - 10)/2);
    }


    /**
     * @return int
     */
    public function getWisdomScore (): int
    {
        return (int)round(($this->getWisdom() - 10)/2);
    }


    /**
     * @return int
     */
    public function getCharismaScore (): int
    {
        return (int)round(($this->getCharisma() - 10)/2);
    }



}
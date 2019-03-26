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
        return (int)ceil(($this->getStrength() - 10)/2);
    }


    /**
     * @return int
     */
    public function getDexterityScore (): int
    {
        return (int)ceil(($this->getDexterity() - 10)/2);
    }


    /**
     * @return int
     */
    public function getConstitutionScore (): int
    {
        return (int)ceil(($this->getConstitution() - 10)/2);
    }


    /**
     * @return int
     */
    public function getIntelligenceScore (): int
    {
        return (int)ceil(($this->getIntelligence() - 10)/2);
    }


    /**
     * @return int
     */
    public function getWisdomScore (): int
    {
        return (int)ceil(($this->getWisdom() - 10)/2);
    }


    /**
     * @return int
     */
    public function getCharismaScore (): int
    {
        return (int)ceil(($this->getCharisma() - 10)/2);
    }



}
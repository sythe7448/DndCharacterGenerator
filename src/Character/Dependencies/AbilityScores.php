<?php
//declare (strict_types=1);

namespace DND\Character\Dependencies;

class AbilityScores
{
    /**
     * @var Stats
     */
    protected $stats;

    public function __construct (Stats $stats)
    {
        $this->stats = $stats;
    }

    /**
     * @return mixed
     */
    public function getStats ()
    {
        return $this->stats;
    }

    /**
     * @return int
     */
    public function getStrengthScore (): int
    {
        return (int)ceil(($this->stats->getStrength() - 10)/2);
    }


    /**
     * @return int
     */
    public function getDexterityScore (): int
    {
        return (int)ceil(($this->stats->getDexterity() - 10)/2);
    }


    /**
     * @return int
     */
    public function getConstitutionScore (): int
    {
        return (int)ceil(($this->stats->getConstitution() - 10)/2);
    }


    /**
     * @return int
     */
    public function getIntelligenceScore (): int
    {
        return (int)ceil(($this->stats->getIntelligence() - 10)/2);
    }


    /**
     * @return int
     */
    public function getWisdomScore (): int
    {
        return (int)ceil(($this->stats->getWisdom() - 10)/2);
    }


    /**
     * @return int
     */
    public function getCharismaScore (): int
    {
        return (int)ceil(($this->stats->getCharisma() - 10)/2);
    }



}
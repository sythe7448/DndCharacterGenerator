<?php
declare (strict_types=1);

namespace DND\Character\Dependencies;

use DND\Character\Character;

class Skills extends AbilityScores
{
    /**
     * The proficiency mod of the character
     *
     * @return int
     */
    public function getProficiencyMod (): int
    {
        return (int)ceil(($this->getLevel() / 4) + 1);
    }

    /**
     * @return int
     */
    public function getAcrobatics (): int
    {
        return 10 + $this->getDexterityScore();
    }

    /**
     * @return int
     */
    public function getAnimalHandling (): int
    {
        return 10 + $this->getWisdomScore();
    }

    /**
     * @return int
     */
    public function getArcana (): int
    {
        return 10 + $this->getIntelligenceScore();
    }

    /**
     * @return int
     */
    public function getAthletics (): int
    {
        return 10 + $this->getStrengthScore();
    }

    /**
     * @return int
     */
    public function getDeception (): int
    {
        return 10 + $this->getCharismaScore();
    }

    /**
     * @return int
     */
    public function getHistory (): int
    {
        return 10 + $this->getIntelligenceScore();
    }

    /**
     * @return int
     */
    public function getInsight (): int
    {
        return 10 + $this->getWisdomScore();
    }

    /**
     * @return int
     */
    public function getIntimidation (): int
    {
        return 10 + $this->getCharismaScore();
    }

    /**
     * @return int
     */
    public function getInvestigation (): int
    {
        return 10 + $this->getIntelligenceScore();
    }

    /**
     * @return int
     */
    public function getMedicine (): int
    {
        return 10 + $this->getWisdomScore();
    }

    /**
     * @return int
     */
    public function getNature (): int
    {
        return 10 + $this->getIntelligenceScore();
    }

    /**
     * @return int
     */
    public function getPerception (): int
    {
        return 10 + $this->getWisdomScore();
    }

    /**
     * @return int
     */
    public function getPerformance (): int
    {
        return 10 + $this->getCharismaScore();
    }

    /**
     * @return int
     */
    public function getPersuasion (): int
    {
        return 10 + $this->getCharismaScore();
    }

    /**
     * @return int
     */
    public function getReligion (): int
    {
        return 10 + $this->getIntelligenceScore();
    }

    /**
     * @return int
     */
    public function getSleightOfHand (): int
    {
        return 10 + $this->getDexterityScore();
    }

    /**
     * @return int
     */
    public function getStealth (): int
    {
        return 10 + $this->getDexterityScore();
    }

    /**
     * @return int
     */
    public function getSurvival (): int
    {
        return 10 + $this->getWisdomScore();
    }



}


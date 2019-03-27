<?php
declare (strict_types=1);

namespace DND\Character\Dependencies;

use DND\Character\Dependencies\AbilityScores;

class Skills
{
    /**
     * @var AbilityScores
     */
    private $abilityScores;

    private $level;

    /**
     * Skills constructor.
     *
     * @var $abilityScores
     */
    public function __construct (AbilityScores $abilityScores, $level)
    {
        $this->abilityScores = $abilityScores;
        $this->level = $level;
    }


    /**
     * The proficiency mod of the character for skills
     *
     * @return int
     */
    public function getProficiencyMod (): int
    {
        return (int)ceil(($this->level / 4) + 1);
    }

    /**
     * @return int
     */
    public function getAcrobatics (): int
    {
        return 10 + $this->abilityScores->getDexterityScore();
    }

    /**
     * @return int
     */
    public function getAnimalHandling (): int
    {
        return 10 + $this->abilityScores->getWisdomScore();
    }

    /**
     * @return int
     */
    public function getArcana (): int
    {
        return 10 + $this->abilityScores->getIntelligenceScore();
    }

    /**
     * @return int
     */
    public function getAthletics (): int
    {
        return 10 + $this->abilityScores->getStrengthScore();
    }

    /**
     * @return int
     */
    public function getDeception (): int
    {
        return 10 + $this->abilityScores->getCharismaScore();
    }

    /**
     * @return int
     */
    public function getHistory (): int
    {
        return 10 + $this->abilityScores->getIntelligenceScore();
    }

    /**
     * @return int
     */
    public function getInsight (): int
    {
        return 10 + $this->abilityScores->getWisdomScore();
    }

    /**
     * @return int
     */
    public function getIntimidation (): int
    {
        return 10 + $this->abilityScores->getCharismaScore();
    }

    /**
     * @return int
     */
    public function getInvestigation (): int
    {
        return 10 + $this->abilityScores->getIntelligenceScore();
    }

    /**
     * @return int
     */
    public function getMedicine (): int
    {
        return 10 + $this->abilityScores->getWisdomScore();
    }

    /**
     * @return int
     */
    public function getNature (): int
    {
        return 10 + $this->abilityScores->getIntelligenceScore();
    }

    /**
     * @return int
     */
    public function getPerception (): int
    {
        return 10 + $this->abilityScores->getWisdomScore();
    }

    /**
     * @return int
     */
    public function getPerformance (): int
    {
        return 10 + $this->abilityScores->getCharismaScore();
    }

    /**
     * @return int
     */
    public function getPersuasion (): int
    {
        return 10 + $this->abilityScores->getCharismaScore();
    }

    /**
     * @return int
     */
    public function getReligion (): int
    {
        return 10 + $this->abilityScores->getIntelligenceScore();
    }

    /**
     * @return int
     */
    public function getSleightOfHand (): int
    {
        return 10 + $this->abilityScores->getDexterityScore();
    }

    /**
     * @return int
     */
    public function getStealth (): int
    {
        return 10 + $this->abilityScores->getDexterityScore();
    }

    /**
     * @return int
     */
    public function getSurvival (): int
    {
        return 10 + $this->abilityScores->getWisdomScore();
    }



}


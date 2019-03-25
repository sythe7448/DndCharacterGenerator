<?php
declare (strict_types=1);

namespace DND\Character\Dependencies;

class Skills extends AbilityScores
{

    /**
     * The total acrobatics skill + modifiers
     *
     * @var int
     */
    private $acrobatics;

    /**
     * The total animal handling skill + modifiers
     *
     * @var int
     */
    private $animalHandling;

    /**
     * The total arcana skill + modifiers
     *
     * @var int
     */
    private $arcana;

    /**
     * The total athletics skill + modifiers
     *
     * @var int
     */
    private $athletics;

    /**
     * The total deception skill + modifiers
     *
     * @var int
     */
    private $deception;

    /**
     * The total history skill + modifiers
     *
     * @var int
     */
    private $history;

    /**
     * The total insight skill + modifiers
     *
     * @var int
     */
    private $insight;

    /**
     * The total intimidation skill + modifiers
     *
     * @var int
     */
    private $intimidation;

    /**
     * The total investigation skill + modifiers
     *
     * @var int
     */
    private $investigation;

    /**
     * The total medicine skill + modifiers
     *
     * @var int
     */
    private $medicine;

    /**
     * The total nature skill + modifiers
     *
     * @var int
     */
    private $nature;

    /**
     * The total perception skill + modifiers
     *
     * @var int
     */
    private $perception;

    /**
     * The total performance skill + modifiers
     *
     * @var int
     */
    private $performance;

    /**
     * The total persuasion skill + modifiers
     *
     * @var int
     */
    private $persuasion;

    /**
     * The total religion skill + modifiers
     *
     * @var int
     */
    private $religion;

    /**
     * The total slight of hand skill + modifiers
     *
     * @var int
     */
    private $sleightOfHand;

    /**
     * The total stealth skill + modifiers
     *
     * @var int
     */
    private $stealth;

    /**
     * The total survival skill + modifiers
     *
     * @var int
     */
    private $survival;

    /**
     * Skills constructor.
     *
     */
//    public function __construct(int $acrobatics, int $animalHandling, int $arcana, int $athletics, int $deception, int $history, int $insight, int $intimidation, int $investigation, int $medicine, int $nature, int $perception, int $performance, int $persuasion, int $religion, int $sleightOfHand, int $stealth, int $survival)
//    {
//        $this->acrobatics = 10 + $this->getDexterityModifier();
//        $this->animalHandling = 10 + $this->getWisdomModifier();
//        $this->arcana = 10 + $this->getIntelligenceModifier();
//        $this->athletics = 10 + $this->getStrengthModifier();
//        $this->deception = 10 + $this->getCharismaModifier();
//        $this->history = 10 + $this->getIntelligenceModifier();
//        $this->insight = 10 + $this->getWisdomModifier();
//        $this->intimidation = 10 + $this->getCharismaModifier();
//        $this->investigation = 10 + $this->getIntelligence();
//        $this->medicine = 10 + $this->getWisdomModifier();
//        $this->nature = 10 + $this->getIntelligenceModifier();
//        $this->perception = 10 + $this->getWisdomModifier();
//        $this->performance = 10 + $this->getCharismaModifier();
//        $this->persuasion = 10 + $this->getCharismaModifier();
//        $this->religion = 10 + $this->getIntelligenceModifier();
//        $this->sleightOfHand = 10 + $this->getDexterityModifier();
//        $this->stealth = 10 + $this->getDexterityModifier();
//        $this->survival = 10 + $this->getWisdomModifier();
//    }

    /**
     * @return int
     */
    public function getAcrobatics (): int
    {
        return $this->acrobatics;
    }

    /**
     * @param int $acrobatics
     */
    public function setAcrobatics (int $acrobatics): void
    {
        $this->acrobatics = $acrobatics;
    }

    /**
     * @return int
     */
    public function getAnimalHandling (): int
    {
        return $this->animalHandling;
    }

    /**
     * @param int $animalHandling
     */
    public function setAnimalHandling (int $animalHandling): void
    {
        $this->animalHandling = $animalHandling;
    }

    /**
     * @return int
     */
    public function getArcana (): int
    {
        return $this->arcana;
    }

    /**
     * @param int $arcana
     */
    public function setArcana (int $arcana): void
    {
        $this->arcana = $arcana;
    }

    /**
     * @return int
     */
    public function getAthletics (): int
    {
        return $this->athletics;
    }

    /**
     * @param int $athletics
     */
    public function setAthletics (int $athletics): void
    {
        $this->athletics = $athletics;
    }

    /**
     * @return int
     */
    public function getDeception (): int
    {
        return $this->deception;
    }

    /**
     * @param int $deception
     */
    public function setDeception (int $deception): void
    {
        $this->deception = $deception;
    }

    /**
     * @return int
     */
    public function getHistory (): int
    {
        return $this->history;
    }

    /**
     * @param int $history
     */
    public function setHistory (int $history): void
    {
        $this->history = $history;
    }

    /**
     * @return int
     */
    public function getInsight (): int
    {
        return $this->insight;
    }

    /**
     * @param int $insight
     */
    public function setInsight (int $insight): void
    {
        $this->insight = $insight;
    }

    /**
     * @return int
     */
    public function getIntimidation (): int
    {
        return $this->intimidation;
    }

    /**
     * @param int $intimidation
     */
    public function setIntimidation (int $intimidation): void
    {
        $this->intimidation = $intimidation;
    }

    /**
     * @return int
     */
    public function getInvestigation (): int
    {
        return $this->investigation;
    }

    /**
     * @param int $investigation
     */
    public function setInvestigation (int $investigation): void
    {
        $this->investigation = $investigation;
    }

    /**
     * @return int
     */
    public function getMedicine (): int
    {
        return $this->medicine;
    }

    /**
     * @param int $medicine
     */
    public function setMedicine (int $medicine): void
    {
        $this->medicine = $medicine;
    }

    /**
     * @return int
     */
    public function getNature (): int
    {
        return $this->nature;
    }

    /**
     * @param int $nature
     */
    public function setNature (int $nature): void
    {
        $this->nature = $nature;
    }

    /**
     * @return int
     */
    public function getPerception (): int
    {
        return $this->perception;
    }

    /**
     * @param int $perception
     */
    public function setPerception (int $perception): void
    {
        $this->perception = $perception;
    }

    /**
     * @return int
     */
    public function getPerformance (): int
    {
        return $this->performance;
    }

    /**
     * @param int $performance
     */
    public function setPerformance (int $performance): void
    {
        $this->performance = $performance;
    }

    /**
     * @return int
     */
    public function getPersuasion (): int
    {
        return $this->persuasion;
    }

    /**
     * @param int $persuasion
     */
    public function setPersuasion (int $persuasion): void
    {
        $this->persuasion = $persuasion;
    }

    /**
     * @return int
     */
    public function getReligion (): int
    {
        return $this->religion;
    }

    /**
     * @param int $religion
     */
    public function setReligion (int $religion): void
    {
        $this->religion = $religion;
    }

    /**
     * @return int
     */
    public function getSleightOfHand (): int
    {
        return $this->sleightOfHand;
    }

    /**
     * @param int $sleightOfHand
     */
    public function setSleightOfHand (int $sleightOfHand): void
    {
        $this->sleightOfHand = $sleightOfHand;
    }

    /**
     * @return int
     */
    public function getStealth (): int
    {
        return $this->stealth;
    }

    /**
     * @param int $stealth
     */
    public function setStealth (int $stealth): void
    {
        $this->stealth = $stealth;
    }

    /**
     * @return int
     */
    public function getSurvival (): int
    {
        return $this->survival;
    }

    /**
     * @param int $survival
     */
    public function setSurvival (int $survival): void
    {
        $this->survival = $survival;
    }



}
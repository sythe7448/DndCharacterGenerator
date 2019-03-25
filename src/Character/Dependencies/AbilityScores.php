<?php

class AbilityScores extends Stats
{
    /**
     * The strength modifier of the character
     *
     * @var int
     */
    private $strengthModifier;

    /**
     * The dexterity modifier of the character
     *
     * @var int
     */
    private $dexterityModifier;

    /**
     * The constitution modifier of the character
     *
     * @var int
     */
    private $constitutionModifier;

    /**
     * The intelligence modifier of the character
     *
     * @var int
     */
    private $intelligenceModifier;

    /**
     * The wisdom modifier of the character
     *
     * @var int
     */
    private $wisdomModifier;

    /**
     * The charisma modifier of the character
     *
     * @var int
     */
    private $charismaModifier;

    /**
     * AbilityScores constructor.
     *
     */
//    public function __construct ()
//    {
//        $this->strengthModifier = intdiv($this->getStrength() - 10,2);
//        $this->dexterityModifier = intdiv($this->getDexterity() - 10,2);
//        $this->constitutionModifier = intdiv($this->getConstitution() - 10,2);
//        $this->intelligenceModifier = intdiv($this->getIntelligence() - 10,2);
//        $this->wisdomModifier = intdiv($this->getWisdom() - 10,2);
//        $this->charismaModifier = intdiv($this->getCharisma() - 10,2);
//    }


    /**
     * @return int
     */
    public function getStrengthModifier (): int
    {
        return $this->strengthModifier;
    }

    /**
     * @param int $strengthModifier
     */
    public function setStrengthModifier (): int
    {
        $this->strengthModifier = intdiv($this->getStrength() - 10,2);
    }

    /**
     * @return int
     */
    public function getDexterityModifier (): int
    {
        return $this->dexterityModifier;
    }

    /**
     * @param int $dexterityModifier
     */
    public function setDexterityModifier (): int
    {
        $this->dexterityModifier = intdiv($this->getDexterity() - 10,2);
    }

    /**
     * @return int
     */
    public function getConstitutionModifier (): int
    {
        return $this->constitutionModifier;
    }

    /**
     * @param int $constitutionModifier
     */
    public function setConstitutionModifier (): int
    {
        $this->constitutionModifier = intdiv($this->getConstitution() - 10,2);
    }

    /**
     * @return int
     */
    public function getIntelligenceModifier (): int
    {
        return $this->intelligenceModifier;
    }

    /**
     * @param int $intelligenceModifier
     */
    public function setIntelligenceModifier (int $intelligenceModifier): int
    {
        $this->intelligenceModifier = intdiv($this->getIntelligence() - 10,2);
    }

    /**
     * @return int
     */
    public function getWisdomModifier (): int
    {
        return $this->wisdomModifier;
    }

    /**
     * @param int $wisdomModifier
     */
    public function setWisdomModifier (): Int
    {
        $this->wisdomModifier = intdiv($this->getWisdom() - 10,2);
    }

    /**
     * @return int
     */
    public function getCharismaModifier (): int
    {
        return $this->charismaModifier;
    }

    /**
     * @param int $charismaModifier
     */
    public function setCharismaModifier (): int
    {
        $this->charismaModifier = intdiv($this->getCharismaModifier() - 10,2);
    }


}
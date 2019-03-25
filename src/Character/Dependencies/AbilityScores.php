<?php
declare (strict_types=1);

namespace DND\Character\Dependencies;

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
//        $this->strengthModifier = round(($this->getStrength() - 10)/2);
//        $this->dexterityModifier = round(($this->getDexterity() - 10)/2);
//        $this->constitutionModifier = round(($this->getConstitution() - 10)/2);
//        $this->intelligenceModifier = round(($this->getIntelligence() - 10)/2);
//        $this->wisdomModifier = round(($this->getWisdom() - 10)/2);
//        $this->charismaModifier = round(($this->getCharisma() - 10)/2);
//    }


    /**
     * @return int
     */
    public function getStrengthModifier (): int
    {
        return $this->strengthModifier;
    }


    /**
     * @return int
     */
    public function setStrengthModifier (): int
    {
        $this->strengthModifier = Round(($this->getStrength() - 10)/2);
    }

    /**
     * @return int
     */
    public function getDexterityModifier (): int
    {
        return $this->dexterityModifier;
    }

    /**
     * @return int
     */
    public function setDexterityModifier (): int
    {
        $this->dexterityModifier = round(($this->getDexterity() - 10)/2);
    }

    /**
     * @return int
     */
    public function getConstitutionModifier (): int
    {
        return $this->constitutionModifier;
    }

    /**
     * @return int
     */
    public function setConstitutionModifier (): int
    {
        $this->constitutionModifier = round(($this->getConstitution() - 10)/2);
    }

    /**
     * @return int
     */
    public function getIntelligenceModifier (): int
    {
        return $this->intelligenceModifier;
    }

    /**
     * @return int
     */
    public function setIntelligenceModifier (): int
    {
        $this->intelligenceModifier = round(($this->getIntelligence() - 10)/2);
    }

    /**
     * @return int
     */
    public function getWisdomModifier (): int
    {
        return $this->wisdomModifier;
    }

    /**
     * @return Int
     */
    public function setWisdomModifier (): Int
    {
        $this->wisdomModifier = round(($this->getWisdom() - 10)/2);
    }

    /**
     * @return int
     */
    public function getCharismaModifier (): int
    {
        return $this->charismaModifier;
    }


    /**
     * @return int
     */
    public function setCharismaModifier (): int
    {
        $this->charismaModifier = round(($this->getCharismaModifier() - 10)/2);
    }


}
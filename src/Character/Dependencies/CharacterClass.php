<?php
declare (strict_types=1);

namespace DND\Character\Dependencies;

use DND\Character\Dependencies\CharacterSubclass;
use DND\Character\Dependencies\ClassSpells;

class CharacterClass
{

    /**
     * The Id of the class
     *
     * @var int
     */
    private $id;

    /**
     * The name of the class
     *
     * @var string
     */
    private $name;

    /**
     * The size of dice used for the HP generation of the class
     *
     * @var int
     */
    private $hitDie;

    /**
     * An array of proficiency choices the class can pick from
     *
     * @var array
     */
    private $proficiencyChoices;

    /**
     * An array of proficiencies the class has by default
     *
     * @var array
     */
    private $proficiencies;

    /**
     * Array of Starting equipment items: $name=>$id
     *
     * @var array
     */
    private $starting_equipment;

    /**
     * The subclass of the character
     *
     * @var CharacterSubclass $subclass
     */
    private $subclass;

    /**
     * The spells this class has available to it
     *
     * @var ClassSpells $spellCasting
     */
    private $spellCasting;

    /**
     * CharacterClass constructor.
     *
     * @param string                                        $name
     * @param int                                           $hitDie
     * @param array                                         $proficiencyChoices
     * @param array                                         $proficiencies
     * @param array                                         $starting_equipment
     * @param \DND\Character\Dependencies\CharacterSubclass $subclass
     * @param \DND\Character\Dependencies\ClassSpells       $spellCasting
     */
    public function __construct (string $name, int $hitDie, array $proficiencyChoices, array $proficiencies, array $starting_equipment, \DND\Character\Dependencies\CharacterSubclass $subclass, \DND\Character\Dependencies\ClassSpells $spellCasting)
    {
        $this->name = $name;
        $this->hitDie = $hitDie;
        $this->proficiencyChoices = $proficiencyChoices;
        $this->proficiencies = $proficiencies;
        $this->starting_equipment = $starting_equipment;
        $this->subclass = $subclass;
        $this->spellCasting = $spellCasting;
    }

    /**
     * @return int
     */
    public function getId (): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId (int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName (): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName (string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getHitDie (): int
    {
        return $this->hitDie;
    }

    /**
     * @param int $hitDie
     */
    public function setHitDie (int $hitDie): void
    {
        $this->hitDie = $hitDie;
    }

    /**
     * @return array
     */
    public function getProficiencyChoices (): array
    {
        return $this->proficiencyChoices;
    }

    /**
     * @param array $proficiencyChoices
     */
    public function setProficiencyChoices (array $proficiencyChoices): void
    {
        $this->proficiencyChoices = $proficiencyChoices;
    }

    /**
     * @return array
     */
    public function getProficiencies (): array
    {
        return $this->proficiencies;
    }

    /**
     * @param array $proficiencies
     */
    public function setProficiencies (array $proficiencies): void
    {
        $this->proficiencies = $proficiencies;
    }

    /**
     * @return array
     */
    public function getStartingEquipment (): array
    {
        return $this->starting_equipment;
    }

    /**
     * @param array $starting_equipment
     */
    public function setStartingEquipment (array $starting_equipment): void
    {
        $this->starting_equipment = $starting_equipment;
    }

    /**
     * @return \DND\Character\Dependencies\CharacterSubclass
     */
    public function getSubclass (): \DND\Character\Dependencies\CharacterSubclass
    {
        return $this->subclass;
    }

    /**
     * @param \DND\Character\Dependencies\CharacterSubclass $subclass
     */
    public function setSubclass (\DND\Character\Dependencies\CharacterSubclass $subclass): void
    {
        $this->subclass = $subclass;
    }

    /**
     * @return \DND\Character\Dependencies\ClassSpells
     */
    public function getSpellCasting (): \DND\Character\Dependencies\ClassSpells
    {
        return $this->spellCasting;
    }

    /**
     * @param \DND\Character\Dependencies\ClassSpells $spellCasting
     */
    public function setSpellCasting (\DND\Character\Dependencies\ClassSpells $spellCasting): void
    {
        $this->spellCasting = $spellCasting;
    }

}
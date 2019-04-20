<?php
declare (strict_types=1);

namespace DND\Character;

use DND\Character\Dependencies\GroupSkills;
use DND\Character\Dependencies\GroupStats;

class Character
{

    /**
     * The id of the character
     *
     * @var int
     */
    private $id;

    /**
     * The full name of the character
     *
     * @param Character $name
     *
     * @return string
     */
    private $name;

    /**
     * The alignment of the character
     *
     * @var string
     */
    private $alignment;

    /**
     * The alignment of the character
     *
     * @var Race $race
     */
    private $race;

    /**
     * The size of the character
     *
     * @var Race $size
     */
    private $size;

    /**
     * The class of the character
     *
     * @var CharacterClass $characterClass
     */
    private $characterClass;

    /**
     * The speed of the character on ground, water and air.
     *
     * @var Race $speed
     */
    private $speed;

    /**
     * The initiative bonus of the character when combat starts
     *
     * @var int
     */
    private $initiative;

    /**
     * Contains the weight carried and how much the character can physically carry
     *
     * @var WeightCarried $weightCarried
     */
    private $weightCarried;

    /**
     * The gender of the character
     *
     * @var string
     */
    private $gender;

    /**
     * The stats of of the character
     *
     * @param GroupStats $stats
     */
    private $stats;

    /**
     * The skills of the character
     *
     * @var GroupSkills $skills
     */
    private $skills;

    /**
     * The HP of the character
     *
     * @var int
     */
    private $hitPoints;

    /**
     * The current armor class of the character
     *
     * @var int
     */
    private $armorClass;

    /**
     * The current proficiency bonus of the character for skills
     *
     * @var int
     */
    private $proficiencyBonus;

    /**
     * The background of the character
     *
     * @var Background $background
     */
    private $background;

    /**
     * The collection of items a character has equipped on its person
     *
     * @var EquippedItems $equippedItems
     */
    private $equippedItems;

    /**
     * The collection of items that the character has store on their person
     *
     * @var Inventory $inventory
     */
    private $inventory;

    /**
     * List of languages that character knows
     *
     * @var array
     */
    private $languages;

    /**
     * Contains the eye, hair & skin color, weight and, age
     *
     * @var Appearance $appearance
     */
    private $appearance;

    /**
     * Description of the character
     *
     * @var string
     */
    private $description;

    /**
     * Notes for the game master
     *
     * @var string
     */
    private $gameMasterNotes;

}
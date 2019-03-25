<?php
declare (strict_types=1);

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
     * The level of the character
     *
     * @var int
     */
    private $level;

    /**
     * The alignment of the character
     *
     * @var string
     */
    private $alignment;

    /**
     * The alignment of the character
     *
     * @param Race $race
     */
    private $race;

    /**
     * The size of the character
     *
     * @param Race $size
     */
    private $size;

    /**
     * The class of the character
     *
     * @param CharacterClass $characterClass
     */
    private $characterClass;

    /**
     * The speed of the character on ground, water and air.
     *
     * @param Race $speed
     */
    private $speed;

    /**
     * The vision of the character
     *
     * @param Race $vision
     */
    private $vision;

    /**
     * The initiative bonus of the character when combat starts
     *
     * @var int
     */
    private $initiative;

    /**
     * Contains the weight carried and how much the character can physically carry
     *
     * @param WeightCarried $weightCarried
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
     * @param Stats $stats
     */
    private $stats;

    /**
     * The skills of the character
     *
     * @var Skills $skills
     */
    private $skills;

    /**
     * The HP of the character
     *
     * @var int
     */
    private $hitPoints;

    /**
     * The current HP of the character
     *
     * @var int
     */
    private $currentHitPoints;

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
     * @param Background $background
     */
    private $background;

    /**
     * The collection of items a character has equipped on its person
     *
     * @param EquippedItems $equippedItems
     */
    private $equippedItems;

    /**
     * The collection of items that the character has store on their person
     *
     * @param Inventory $inventory
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
     * @param Appearance $appearance
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
<?php
namespace DND\Items;

class Weapon extends Item
{
    /**
     * Category of weapon it is
     *
     * @var string
     */
    private $category;

    /**
     * The die that is used to generate damage
     *
     * @var
     */
    private $damageDie;

    /**
     * The distance in feet that the weapon can hit
     *
     * @var int
     */
    private $range;

    /**
     * The effect a weapons has if it has it
     *
     * @var string|null
     */
    private $effect;

}
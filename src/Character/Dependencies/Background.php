<?php
declare (strict_types=1);

namespace DND\Character\Dependencies;

class Background
{


    /**
     * The id of the background
     *
     * @var int
     */
    private $id;

    /**
     * The name of the background
     *
     * @var string
     */
    private $name;

    /**
     * List of items granted by the background
     *
     * @var array
     */
    private $items;

    /**
     * List of potential skill proficiencies granted by the background
     *
     * @var array
     */
    private $skillProficiencies;

    /**
     * Personality trait of the character
     *
     * @var string
     */
    private $personalityTrait;

    /**
     * Ideal of the character
     *
     * @var string
     */
    private $ideal;

    /**
     * Bond of the character
     *
     * @var string
     */
    private $bond;

    /**
     * Flaw of the character
     *
     * @var string
     */
    private $flaw;

    /**
     * The feature of the background
     *
     * @var string
     */
    private $feature;
}
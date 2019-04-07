<?php
namespace DND\Character\Dependencies;

class Feat
{
    /**
     * Id of the feat
     *
     * @var int
     */
    private $id;

    /**
     * Name of the feat
     *
     * @var string
     */
    private $name;

    /**
     * The effect of the feat
     *
     * @var string
     */
    private $effect;

    /**
     * The name of the stat that is required
     *
     * @var string|null
     */
    private $statNameRequirement;

    /**
     * The value of the stat required
     *
     * @var int|null
     */
    private $statValueRequirement;

    /**
     * The name of the background that is required
     *
     * @var string|null
     */
    private $backgroundRequirement;

    /**
     * The name of the class that is required
     *
     * @var string|null
     */
    private $classRequirement;

    /**
     * The name of the race that is required
     *
     * @var string|null
     */
    private $raceRequirement;

    /**
     * The name of the skill that is required
     *
     * @var string|null
     */
    private $skillRequirement;
}
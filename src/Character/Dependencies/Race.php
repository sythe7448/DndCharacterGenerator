<?php
declare (strict_types=1);

class Race
{

    /**
     * The Id of the race
     *
     * @var int
     */
    private $id;

    /**
     * The name of the race
     *
     * @var string
     */
    private $name;

    /**
     * The stat modifiers of the race
     *
     * @param Stats $stats
     */
    private $stats;

    /**
     * The size of the race
     *
     * @var string
     */
    private $size;

    /**
     * The base move speed for this race (in feet per round)
     *
     * @param RacialSpeed $speed
     */
    private $speed;

    /**
     * The vision of the race
     *
     * @var string
     */
    private $vision;

    /**
     * The languages know by all of this race
     *
     * @var array
     */
    private $languages;

    /**
     * The race features
     *
     * @var string
     */
    private $features;
}
<?php
declare (strict_types=1);

namespace DND\Character\Dependencies;

use DND\Character\Dependencies\Stats;

class Race
{


    /**
     * The name of the race
     *
     * @var string
     */
    private $name;

    /**
     * The stat modifiers of the race
     *
     * @var Stats $stats
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
     * @var RacialSpeed $speed
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
     * @var array
     */
    private $features;


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
     * @return mixed
     */
    public function getStats ()
    {
        return $this->stats;
    }

    /**
     * @param Stats $stats
     */
    public function setStats (Stats $stats): void
    {
        $this->stats = $stats;
    }

    /**
     * @return string
     */
    public function getSize (): string
    {
        return $this->size;
    }

    /**
     * @param string $size
     */
    public function setSize (string $size): void
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getSpeed ()
    {
        return $this->speed;
    }

    /**
     * @param mixed $speed
     */
    public function setSpeed ($speed): void
    {
        $this->speed = $speed;
    }

    /**
     * @return string
     */
    public function getVision (): string
    {
        return $this->vision;
    }

    /**
     * @param string $vision
     */
    public function setVision (string $vision): void
    {
        $this->vision = $vision;
    }

    /**
     * @return array
     */
    public function getLanguages (): array
    {
        return $this->languages;
    }

    /**
     * @param array $languages
     */
    public function setLanguages (array $languages): void
    {
        $this->languages = $languages;
    }

    /**
     * @return array
     */
    public function getFeatures (): array
    {
        return $this->features;
    }

    /**
     * @param array $features
     */
    public function setFeatures (array $features): void
    {
        $this->features = $features;
    }


}
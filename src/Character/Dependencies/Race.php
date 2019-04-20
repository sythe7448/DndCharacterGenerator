<?php
declare (strict_types=1);
namespace DND\Character\Dependencies;

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
     * @var array
     */
    private $stats;

    /**
     * The minimum and maximum size of the race
     *
     * @var string
     */
    private $size;

    /**
     * min and ma height in inches
     *
     * @var array
     */
    private $height;

    /**
     * The base move speed for this race (in feet per round)
     *
     * @var int $speed
     */
    private $speed;

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
     * The minimum and maximum age
     *
     * @var array
     */
    private $age;

    /**
     * Race constructor.
     *
     * @param string $name
     * @param array  $stats
     * @param string $size
     * @param array  $height
     * @param int    $speed
     * @param array  $languages
     * @param array  $features
     * @param array  $age
     */
    public function __construct (string $name, array $stats, string $size, array $height, int $speed, array $languages, array $features, array $age)
    {
        $this->name = $name;
        $this->stats = $stats;
        $this->size = $size;
        $this->height = $height;
        $this->speed = $speed;
        $this->languages = $languages;
        $this->features = $features;
        $this->age = $age;
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
     * @return array
     */
    public function getStats (): array
    {
        return $this->stats;
    }

    /**
     * @param array $stats
     */
    public function setStats (array $stats): void
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
     * @return array
     */
    public function getHeight (): array
    {
        return $this->height;
    }

    /**
     * @param array $height
     */
    public function setHeight (array $height): void
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getSpeed (): int
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     */
    public function setSpeed (int $speed): void
    {
        $this->speed = $speed;
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

    /**
     * @return array
     */
    public function getAge (): array
    {
        return $this->age;
    }

    /**
     * @param array $age
     */
    public function setAge (array $age): void
    {
        $this->age = $age;
    }

}
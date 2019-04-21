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
    private $traits;

    /**
     * The minimum and maximum age
     *
     * @var array
     */
    private $age;

    /**
     * List of subraces this race has
     *
     * @var array
     */
    private $subraces;

    /**
     * Race constructor.
     *
     * @param string $name
     * @param array  $stats
     * @param string $size
     * @param array  $height
     * @param int    $speed
     * @param array  $languages
     * @param array  $traits
     * @param array  $age
     * @param array  $subraces
     */
    public function __construct (string $name, array $stats, string $size, array $height, int $speed, array $languages, array $traits, array $age, array $subraces)
    {
        $this->name = $name;
        $this->stats = $stats;
        $this->size = $size;
        $this->height = $height;
        $this->speed = $speed;
        $this->languages = $languages;
        $this->traits = $traits;
        $this->age = $age;
        $this->subraces = $subraces;
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
    public function getTraits (): array
    {
        return $this->traits;
    }

    /**
     * @param array $traits
     */
    public function setTraits (array $traits): void
    {
        $this->traits = $traits;
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

    /**
     * @return array
     */
    public function getSubraces (): array
    {
        return $this->subraces;
    }

    /**
     * @param array $subraces
     */
    public function setSubraces (array $subraces): void
    {
        $this->subraces = $subraces;
    }

}
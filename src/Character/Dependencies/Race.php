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
     * The initials of the source book for this material.
     *
     * @var string
     */
    private $source;

    /**
     * The size of the creature determined by DnD mechanics.
     *
     * @var string
     */
    private $size;

    /**
     * The type and amount of movement this character has.
     *
     * @var \stdClass $speed
     */
    private $speed;

    /**
     * The stat modifiers of the race.
     *
     * @var array
     */
    private $stats;

    /**
     * Various fluff features about the race.
     *
     * @var array
     */
    private $entries;

    /**
     * The race features
     *
     * @var array
     */
    private $traits;

    /**
     * The languages known by all of this race
     *
     * @var array
     */
    private $languages;

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
     * @return string
     */
    public function getSource (): string
    {
        return $this->source;
    }

    /**
     * @param string $source
     */
    public function setSource (string $source): void
    {
        $this->source = $source;
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
     * @return \stdClass
     */
    public function getSpeed (): \stdClass
    {
        return $this->speed;
    }

    /**
     * @param \stdClass $speed
     */
    public function setSpeed (\stdClass $speed): void
    {
        $this->speed = $speed;
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
     * @return array
     */
    public function getEntries (): array
    {
        return $this->entries;
    }

    /**
     * @param array $entries
     */
    public function setEntries (array $entries): void
    {
        $this->entries = $entries;
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

}
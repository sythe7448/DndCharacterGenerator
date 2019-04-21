<?php
namespace DND\Character\Dependencies;


class Subrace
{
    /**
     * The id of the subrace
     *
     * @var int
     */
    private $id;

    /**
     * the name of the subrace
     *
     * @var string
     */
    private $name;

    /**
     * Id of the the parent race
     *
     * @var int
     */
    private $parentRace;

    /**
     * The description or lore of the subrace
     *
     * @var string
     */
    private $description;

    /**
     * List of proficiencies the subrace starts with
     *
     * @var array|null
     */
    private $startingProficiencies;

    /**
     * List of the languages the subrace speaks
     *
     * @var array|null
     */
    private $languages;

    /**
     * List of traits the subrace has
     *
     * @var array|null
     */
    private $traits;

    /**
     * Subrace constructor.
     *
     * @param string     $name
     * @param int        $parentRace
     * @param string     $description
     * @param array|null $startingProficiencies
     * @param array|null $languages
     * @param array|null $traits
     */
    public function __construct (string $name, int $parentRace, string $description, ?array $startingProficiencies, ?array $languages, ?array $traits)
    {
        $this->name = $name;
        $this->parentRace = $parentRace;
        $this->description = $description;
        $this->startingProficiencies = $startingProficiencies;
        $this->languages = $languages;
        $this->traits = $traits;
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
     * @return int
     */
    public function getParentRace (): int
    {
        return $this->parentRace;
    }

    /**
     * @param int $parentRace
     */
    public function setParentRace (int $parentRace): void
    {
        $this->parentRace = $parentRace;
    }

    /**
     * @return string
     */
    public function getDescription (): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription (string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return array|null
     */
    public function getStartingProficiencies (): ?array
    {
        return $this->startingProficiencies;
    }

    /**
     * @param array|null $startingProficiencies
     */
    public function setStartingProficiencies (?array $startingProficiencies): void
    {
        $this->startingProficiencies = $startingProficiencies;
    }

    /**
     * @return array|null
     */
    public function getLanguages (): ?array
    {
        return $this->languages;
    }

    /**
     * @param array|null $languages
     */
    public function setLanguages (?array $languages): void
    {
        $this->languages = $languages;
    }

    /**
     * @return array|null
     */
    public function getTraits (): ?array
    {
        return $this->traits;
    }

    /**
     * @param array|null $traits
     */
    public function setTraits (?array $traits): void
    {
        $this->traits = $traits;
    }

}
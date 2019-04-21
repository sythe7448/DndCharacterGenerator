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
     * @var array
     */
    private $personalityTrait;

    /**
     * Ideal of the character
     *
     * @var array
     */
    private $ideal;

    /**
     * Bond of the character
     *
     * @var array
     */
    private $bond;

    /**
     * Flaw of the character
     *
     * @var array
     */
    private $flaw;

    /**
     * The feature of the background
     *
     * @var string
     */
    private $feature;

    /**
     * The Description of the background
     *
     * @var string
     */
    private $description;

    /**
     * An object of required requirements
     *
     * @var Requirements $requirements
     */
    private $requirements;

    /**
     * Background constructor.
     *
     * @param string       $name
     * @param array        $items
     * @param array        $skillProficiencies
     * @param array        $personalityTrait
     * @param array        $ideal
     * @param array        $bond
     * @param array        $flaw
     * @param string       $feature
     * @param string       $description
     * @param Requirements $requirements
     */
    public function __construct (string $name, array $items, array $skillProficiencies, array $personalityTrait, array $ideal, array $bond, array $flaw, string $feature, string $description, Requirements $requirements)
    {
        $this->name = $name;
        $this->items = $items;
        $this->skillProficiencies = $skillProficiencies;
        $this->personalityTrait = $personalityTrait;
        $this->ideal = $ideal;
        $this->bond = $bond;
        $this->flaw = $flaw;
        $this->feature = $feature;
        $this->description = $description;
        $this->requirements = $requirements;
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
    public function getItems (): array
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems (array $items): void
    {
        $this->items = $items;
    }

    /**
     * @return array
     */
    public function getSkillProficiencies (): array
    {
        return $this->skillProficiencies;
    }

    /**
     * @param array $skillProficiencies
     */
    public function setSkillProficiencies (array $skillProficiencies): void
    {
        $this->skillProficiencies = $skillProficiencies;
    }

    /**
     * @return array
     */
    public function getPersonalityTrait (): array
    {
        return $this->personalityTrait;
    }

    /**
     * @param array $personalityTrait
     */
    public function setPersonalityTrait (array $personalityTrait): void
    {
        $this->personalityTrait = $personalityTrait;
    }

    /**
     * @return array
     */
    public function getIdeal (): array
    {
        return $this->ideal;
    }

    /**
     * @param array $ideal
     */
    public function setIdeal (array $ideal): void
    {
        $this->ideal = $ideal;
    }

    /**
     * @return array
     */
    public function getBond (): array
    {
        return $this->bond;
    }

    /**
     * @param array $bond
     */
    public function setBond (array $bond): void
    {
        $this->bond = $bond;
    }

    /**
     * @return array
     */
    public function getFlaw (): array
    {
        return $this->flaw;
    }

    /**
     * @param array $flaw
     */
    public function setFlaw (array $flaw): void
    {
        $this->flaw = $flaw;
    }

    /**
     * @return string
     */
    public function getFeature (): string
    {
        return $this->feature;
    }

    /**
     * @param string $feature
     */
    public function setFeature (string $feature): void
    {
        $this->feature = $feature;
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
     * @return Requirements
     */
    public function getRequirements (): Requirements
    {
        return $this->requirements;
    }

    /**
     * @param Requirements $requirements
     */
    public function setRequirements (Requirements $requirements): void
    {
        $this->requirements = $requirements;
    }

}
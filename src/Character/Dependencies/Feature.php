<?php
declare (strict_types=1);

namespace DND\Character\Dependencies;

class Feature
{

    /**
     * the id of the feature
     *
     * @var int
     */
    private $id;

    /**
     * The name of the feature
     *
     * @var string
     */
    private $name;

    /**
     * The level requirement of the feature if it exists
     *
     * @var int|null
     */
    private $level;

    /**
     * The name of class required for the feature if it exists
     *
     * @var string|null
     */
    private $classRequirement;

    /**
     * The name of class required for the feature if it exists
     *
     * @var string|null
     */
    private $subclassRequirement;

    /**
     * The name of race required for the feature if it exists
     *
     * @var string|null
     */
    private $raceRequirement;

    /**
     * The level requirement of the feature if it exists
     *
     * @var int|null
     */
    private $levelRequirement;

    /**
     * The name of the background required for the feature if it exists
     *
     * @var string|null
     */
    private $backgroundRequirement;

    /**
     * The name of skill required for the feature if it exists
     *
     * @var string|null
     */
    private $skillRequirement;

    /**
     * The description of the feature
     *
     * @var string
     */
    private $description;

    /**
     * Feature constructor.
     *
     * @param string      $name
     * @param int|null    $level
     * @param string|null $classRequirement
     * @param string|null $subclassRequirement
     * @param string|null $raceRequirement
     * @param int|null    $levelRequirement
     * @param string|null $backgroundRequirement
     * @param string|null $skillRequirement
     * @param string      $description
     */
    public function __construct (string $name, ?int $level, ?string $classRequirement, ?string $subclassRequirement, ?string $raceRequirement, ?int $levelRequirement, ?string $backgroundRequirement, ?string $skillRequirement, string $description)
    {
        $this->name = $name;
        $this->level = $level;
        $this->classRequirement = $classRequirement;
        $this->subclassRequirement = $subclassRequirement;
        $this->raceRequirement = $raceRequirement;
        $this->levelRequirement = $levelRequirement;
        $this->backgroundRequirement = $backgroundRequirement;
        $this->skillRequirement = $skillRequirement;
        $this->description = $description;
    }

    /**
     * @param int $id
     */
    public function setId (int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId (): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName (): string
    {
        return $this->name;
    }

    /**
     * @return int|null
     */
    public function getLevel (): ?int
    {
        return $this->level;
    }

    /**
     * @return string|null
     */
    public function getClassRequirement (): ?string
    {
        return $this->classRequirement;
    }

    /**
     * @return string|null
     */
    public function getSubclassRequirement (): ?string
    {
        return $this->subclassRequirement;
    }

    /**
     * @return string|null
     */
    public function getRaceRequirement (): ?string
    {
        return $this->raceRequirement;
    }

    /**
     * @return int|null
     */
    public function getLevelRequirement (): ?int
    {
        return $this->levelRequirement;
    }

    /**
     * @return string|null
     */
    public function getBackgroundRequirement (): ?string
    {
        return $this->backgroundRequirement;
    }

    /**
     * @return string|null
     */
    public function getSkillRequirement (): ?string
    {
        return $this->skillRequirement;
    }

    /**
     * @return string
     */
    public function getDescription (): string
    {
        return $this->description;
    }


}
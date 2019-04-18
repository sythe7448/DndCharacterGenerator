<?php
namespace DND\Character\Dependencies;


class Requirements
{
    /**
     * The id of the requirements
     *
     * @var int
     */
    private $id;

    /**
     * The level requirement of the feature if it exists
     *
     * @var int|null
     */
    private $levelRequirement;

    /**
     * The name of the stat that is required
     *
     * @var string|null
     */
    private $statName;

    /**
     * The value of the stat required
     *
     * @var int|null
     */
    private $statValue;

    /**
     * The name of the background that is required
     *
     * @var string|null
     */
    private $backgroundName;

    /**
     * The name of the class that is required
     *
     * @var string|null
     */
    private $className;

    /**
     * The name of the race that is required
     *
     * @var string|null
     */
    private $raceName;

    /**
     * The name of the skill that is required
     *
     * @var string|null
     */
    private $skillName;

    /**
     * Requirements constructor.
     *
     * @param int|null    $levelRequirement
     * @param string|null $statName
     * @param int|null    $statValue
     * @param string|null $backgroundName
     * @param string|null $className
     * @param string|null $raceName
     * @param string|null $skillName
     */
    public function __construct (?int $levelRequirement, ?string $statName, ?int $statValue, ?string $backgroundName, ?string $className, ?string $raceName, ?string $skillName)
    {
        $this->levelRequirement = $levelRequirement;
        $this->statName = $statName;
        $this->statValue = $statValue;
        $this->backgroundName = $backgroundName;
        $this->className = $className;
        $this->raceName = $raceName;
        $this->skillName = $skillName;
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
     * @return int|null
     */
    public function getLevelRequirement (): ?int
    {
        return $this->levelRequirement;
    }

    /**
     * @return string|null
     */
    public function getStatName (): ?string
    {
        return $this->statName;
    }

    /**
     * @return int|null
     */
    public function getStatValue (): ?int
    {
        return $this->statValue;
    }

    /**
     * @return string|null
     */
    public function getBackgroundName (): ?string
    {
        return $this->backgroundName;
    }

    /**
     * @return string|null
     */
    public function getClassName (): ?string
    {
        return $this->className;
    }

    /**
     * @return string|null
     */
    public function getRaceName (): ?string
    {
        return $this->raceName;
    }

    /**
     * @return string|null
     */
    public function getSkillName (): ?string
    {
        return $this->skillName;
    }

}
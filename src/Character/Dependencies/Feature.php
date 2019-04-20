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
     * The effect of the feature
     *
     * @var string
     */
    private $effect;

    /**
     * An object of required requirements
     *
     * @var Requirements $requirements
     */
    private $requirements;

    /**
     * Feature constructor.
     *
     * @param string      $name
     * @param string      $effect
     * @param Requirements      $requirements
     */
    public function __construct (string $name, string $effect, Requirements $requirements)
    {
        $this->name = $name;
        $this->effect = $effect;
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
     * @return string
     */
    public function getEffect (): string
    {
        return $this->effect;
    }

    /**
     * @param string $effect
     */
    public function setEffect (string $effect): void
    {
        $this->effect = $effect;
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
<?php

namespace DND\Character\Dependencies;

use Exception;

class AbilityModifier
{

    /**
     * Id of the ability mod
     *
     * @var int
     */
    private $id;
    /**
     * ablity mod name
     *
     * @var string
     */
    private $name;

    /**
     * Value of the ability mod
     *
     * @var int
     */
    private $value;

    /**
     * The stats the value is generated on
     *
     * @var GroupStats
     */
    private $stats;

    /**
     * @var string
     */
    private $baseStatName;

    /**
     * Ability mod constructor.
     *
     * @param            $name
     * @param GroupStats $stats
     * @param            $baseStat
     *
     * @throws Exception
     */
    public function __construct ($name, GroupStats $stats, $baseStat)
    {
        $this->name = $name;
        $this->stats = $stats;


        if (array_key_exists($baseStat,$stats->getStats())) {
            $this->baseStatName = $baseStat;
        }
        else {
            throw new Exception("base stat '$baseStat' selection is does not exist");
        }
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
     * @return mixed
     */
    public function getName (): string
    {
        return $this->name;
    }


    public function setValue (): void
    {
        $this->value = (int)floor(($this->stats->getStatValue($this->baseStatName) - 10)/2);
    }

    /**
     * @return mixed
     */
    public function getValue (): int
    {
        return (int)floor(($this->stats->getStatValue($this->baseStatName) - 10)/2);
    }
}
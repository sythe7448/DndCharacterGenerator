<?php
declare (strict_types=1);
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
     * ability mod name
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
     * Base Stat name of the modifier
     *
     * @var string
     */
    private $baseStatName;

    /**
     * Ability mod constructor.
     *
     * @param GroupStats $stats
     * @param            $baseStat
     *
     * @throws Exception
     */
    public function __construct (GroupStats $stats, $baseStat)
    {
        if (!array_key_exists($baseStat,$stats->getStats()))
        {
            throw new Exception("base stat '$baseStat' selection is does not exist");
        }
        $this->baseStatName = $baseStat;
        $this->name = $stats->getStatName($baseStat).' Modifier';
        $this->value = (int)floor(($stats->getStatValue($baseStat) - 10)/2);

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

    /**
     * @return mixed
     */
    public function getValue (): int
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getBaseStatName (): string
    {
        return $this->baseStatName;
    }
}
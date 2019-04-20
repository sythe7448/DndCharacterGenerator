<?php
declare (strict_types=1);
namespace DND\Character\Dependencies;

use Exception;

class Skill
{

    /**
     * Id of the skill
     *
     * @var int
     */
    private $id;

    /**
     * Name of the skill
     *
     * @var string
     */
    private $name;

    /**
     * Value of the skill
     *
     * @var int
     */
    private $value;

    /**
     * @var string
     */
    private $baseAbilityModifierName;

    /**
     * Ability mod constructor.
     *
     * @param string                $name
     * @param GroupAbilityModifiers $abilityModifiers
     * @param                       $abilityModifier
     * @param bool                  $proficient
     * @param int                   $level
     *
     * @throws Exception
     */
    public function __construct (string $name, GroupAbilityModifiers $abilityModifiers, $abilityModifier, bool $proficient, int $level)
    {
        $this->name = $name;
        $this->value = $abilityModifiers->getAbilityModifierValue($abilityModifier) + 10;
        if ($proficient) {
            $this->value += ($level / 4 + 1);
        }

        if (!array_key_exists($abilityModifier,$abilityModifiers->getAbilityModifiers()))
        {
            throw new Exception("base stat '$abilityModifier' selection is does not exist");
        }
        $this->baseAbilityModifierName = $abilityModifier;

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
    public function getBaseAbilityModifierName (): string
    {
        return $this->baseAbilityModifierName;
    }

}
<?php

namespace DND\Character\Dependencies;


class GroupAbilityModifiers
{

    /**
     * @var array
     */
    private $abilityModifiers;

    public function add (AbilityModifier $abilityModifier): void
    {
        $this->abilityModifiers[$abilityModifier->getName()] = $abilityModifier;
    }

    public function remove (AbilityModifier $abilityModifier): void
    {
        foreach ($this->abilityModifiers as $key => $entity)
        {
            if ($abilityModifier->getId() === $entity->getId())
            {
                unset($this->abilityModifiers[$key]);
                break;
            }
        }
    }

    /**
     * @return array
     */
    public function getAbilityModifiers (): array
    {
        return $this->abilityModifiers;
    }

    /**
     * @param $name
     *
     *
     * @return object
     */
    public function getAbilityModifierName ($name): object
    {
        return $this->abilityModifiers[$name];
    }

    /**
     * @param $name
     *
     * @return int
     */
    public function getAbilityModifierValue ($name): int
    {

        return $this->abilityModifiers[$name]->getValue();
    }


}
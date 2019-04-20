<?php
declare (strict_types=1);
namespace DND\Character\Dependencies;

class GroupSkills
{
    /**
     * @var array
     */
    private $skills;

    public function add (Skill $skill): void
    {
        $this->skills[$skill->getName()] = $skill;
    }

    public function remove (Skill $skill): void
    {
        foreach ($this->skills as $key => $entity)
        {
            if ($skill->getId() === $entity->getId())
            {
                unset($this->skills[$key]);
                break;
            }
        }
    }

    /**
     * @return array
     */
    public function getSkills (): array
    {
        return $this->skills;
    }

    /**
     * @param $name
     *
     * @return string
     */
    public function getSkillName ($name): string
    {
        return $this->skills[$name]->getName();
    }

    /**
     * @param $name
     *
     * @return int
     */
    public function getSkillValue ($name): int
    {

        return $this->skills[$name]->getValue();
    }
}
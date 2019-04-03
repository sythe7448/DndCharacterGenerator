<?php

namespace DND\Character\Dependencies;


class GroupStats
{

    /**
     * @var array
     */
    private $stats;


    public function add (Stat $stat): void
    {
        $this->stats[$stat->getName()] = $stat;
    }

    public function remove (Stat $stat): void
    {
        foreach ($this->stats as $key => $entity)
        {
            if ($stat->getId() === $entity->getId())
            {
                unset($this->stats[$key]);
                break;
            }
        }
    }

    /**
     * @return array
     */
    public function getStats (): array
    {
        return $this->stats;
    }

    /**
     * @param $name
     *
     * @return string
     */
    public function getStatName ($name): string
    {
        return $this->stats[$name]->getName();
    }

    /**
     * @param $name
     *
     * @return int
     */
    public function getStatValue ($name): int
    {

        return $this->stats[$name]->getValue();
    }


}
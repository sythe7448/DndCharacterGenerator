<?php

class EquippedItems
{

    /**
     * A collection of items the character has equipped
     *
     * @var array
     */
    private $equippedItems = [];

    /**
     * Add an item to the characters equipped items
     *
     * @param Item $item
     */
    public function add (Item $item): void
    {
        $this->equippedItems[] = $item;
    }

    /**
     * Remove an item from the characters equipped items
     *
     * @param Item $item
     */
    public function remove (Item $item): void
    {
        foreach ($this->equippedItems as $key => $entity) {
            if ($item->getId() == $entity->getId()) {
                unset($this->equippedItems[$key]);
                break;
            }
        }
    }

}
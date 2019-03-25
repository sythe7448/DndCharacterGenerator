<?php

class Inventory
{

    /**
     * A collection of items the character has on themselves.
     *
     * @var array
     */
    private $items = [];

    /**
     * Add an item to the characters inventory
     *
     * @param Item $item
     */
    public function add (Item $item): void
    {
        $this->items[] = $item;
    }

    /**
     * Remove an item from the characters inventory
     *
     * @param Item $item
     */
    public function remove (Item $item): void
    {
        foreach ($this->items as $key => $entity) {
            if ($item->getId() == $entity->getId()) {
                unset($this->items[$key]);
                break;
            }
        }
    }
}
<?
declare (strict_types=1);

namespace DND\Items;

class Item
{

    /**
     * the id of the item
     *
     * @var int
     */
    private $id;

    /**
     * The name of the item
     *
     * @var string
     */
    private $name;

    /**
     * The weight of the item
     *
     * @var float
     */
    private $weight;

    /**
     * The value of the item
     *
     * @var float
     */
    private $value;

    /**
     * the description of the item.
     *
     * @var string
     */
    private $description;

}
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

    /**
     * The effect the item gives
     *
     * @var string|null
     */
    private $effect;

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
     * @return float
     */
    public function getWeight (): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     */
    public function setWeight (float $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return float
     */
    public function getValue (): float
    {
        return $this->value;
    }

    /**
     * @param float $value
     */
    public function setValue (float $value): void
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getDescription (): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription (string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string|null
     */
    public function getEffect (): ?string
    {
        return $this->effect;
    }

    /**
     * @param string|null $effect
     */
    public function setEffect (?string $effect): void
    {
        $this->effect = $effect;
    }


}
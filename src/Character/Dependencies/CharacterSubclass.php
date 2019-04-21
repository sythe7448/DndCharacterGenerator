<?php
declare (strict_types=1);
namespace DND\Character\Dependencies;

class CharacterSubclass
{

    /**
     * The id of the subclass
     *
     * @var int
     */
    private $id;

    /**
     * The parent class ID
     *
     * @var int
     */
    private $class;

    /**
     * The name of the subclass
     *
     * @var string
     */
    private $name;

    /**
     * The description and lore of the subclass
     *
     * @var string
     */
    private $description;

    /**
     * List of features granted by the subclass
     *
     * @var array
     */
    private $features;

    /**
     * CharacterSubclass constructor.
     *
     * @param int    $class
     * @param string $name
     * @param string $description
     * @param array  $features
     */
    public function __construct (int $class, string $name, string $description, array $features)
    {
        $this->class = $class;
        $this->name = $name;
        $this->description = $description;
        $this->features = $features;
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
     * @return int
     */
    public function getClass (): int
    {
        return $this->class;
    }

    /**
     * @param int $class
     */
    public function setClass (int $class): void
    {
        $this->class = $class;
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
     * @return array
     */
    public function getFeatures (): array
    {
        return $this->features;
    }

    /**
     * @param array $features
     */
    public function setFeatures (array $features): void
    {
        $this->features = $features;
    }

}
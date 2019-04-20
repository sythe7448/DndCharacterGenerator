<?php
declare (strict_types=1);
namespace DND\Character\Dependencies;

class Appearance
{

    /**
     * the id of the appearance
     *
     * @var int
     */
    private $id;

    /**
     * The eye color of the character
     *
     * @var string
     */
    private $eyeColor;

    /**
     * The hair color of the character
     *
     * @var string
     */
    private $hairColor;

    /**
     * The skin color of the character
     *
     * @var string
     */
    private $skinColor;

    /**
     * The height of the character
     *
     * @var float
     */
    private $height;

    /**
     * The weight of the character
     *
     * @var float
     */
    private $weight;

    /**
     * Appearance constructor.
     *
     * @param string $eyeColor
     * @param string $hairColor
     * @param string $skinColor
     * @param float  $height
     * @param float  $weight
     * @param int    $age
     */
    public function __construct (string $eyeColor, string $hairColor, string $skinColor, float $height, float $weight, int $age)
    {
        $this->eyeColor = $eyeColor;
        $this->hairColor = $hairColor;
        $this->skinColor = $skinColor;
        $this->height = $height;
        $this->weight = $weight;
        $this->age = $age;
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
     * @return string
     */
    public function getEyeColor (): string
    {
        return $this->eyeColor;
    }

    /**
     * @param string $eyeColor
     */
    public function setEyeColor (string $eyeColor): void
    {
        $this->eyeColor = $eyeColor;
    }

    /**
     * @return string
     */
    public function getHairColor (): string
    {
        return $this->hairColor;
    }

    /**
     * @param string $hairColor
     */
    public function setHairColor (string $hairColor): void
    {
        $this->hairColor = $hairColor;
    }

    /**
     * @return string
     */
    public function getSkinColor (): string
    {
        return $this->skinColor;
    }

    /**
     * @param string $skinColor
     */
    public function setSkinColor (string $skinColor): void
    {
        $this->skinColor = $skinColor;
    }

    /**
     * @return float
     */
    public function getHeight (): float
    {
        return $this->height;
    }

    /**
     * @param float $height
     */
    public function setHeight (float $height): void
    {
        $this->height = $height;
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
     * @return int
     */
    public function getAge (): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge (int $age): void
    {
        $this->age = $age;
    }

}
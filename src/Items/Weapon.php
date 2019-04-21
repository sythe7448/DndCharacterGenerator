<?php
namespace DND\Items;

class Weapon extends Item
{

    /**
     * The category of weapon IE: Simple, Simple range, Martial, Martial Ranged
     *
     * @var string
     */
    private $weaponCategory;

    /**
     * The number of dmg die on the weapon
     *
     * @var int
     */
    private $numberOfDie;

    /**
     * The die that is used to generate damage
     *
     * @var
     */
    private $damageDie;

    /**
     * The type of damage
     *
     * @var string
     */
    private $damageType;

    /**
     * The distance in feet that the weapon can hit with out disadvantage
     *
     * @var int
     */
    private $normalRange;

    /**
     * The distance in feet that the weapon can hit
     *
     * @var int|null
     */
    private $longRange;

    /**
     * The extra number of dmg die on the weapon extra dmg effect
     *
     * @var int|null
     */
    private $extraNumberOfDie;

    /**
     * The extra die that is used to generate damage if there is extra dmg effect
     *
     * @var int|null
     */
    private $extraDamageDie;

    /**
     * List of properties a weapon can have
     *
     * @var array|null
     */
    private $properties;

    /**
     * Weapon constructor.
     *
     * @param string      $name
     * @param float       $weight
     * @param float       $value
     * @param string      $description
     * @param string|null $effect
     * @param string|null $itemCategory
     * @param string      $weaponCategory
     * @param int         $numberOfDie
     * @param             $damageDie
     * @param string      $damageType
     * @param int         $normalRange
     * @param int|null    $longRange
     * @param int|null    $extraNumberOfDie
     * @param int|null    $extraDamageDie
     * @param array|null  $properties
     */
    public function __construct (string $name, float $weight, float $value, string $description, ?string $effect, ?string $itemCategory, string $weaponCategory, int $numberOfDie, $damageDie, string $damageType, int $normalRange, ?int $longRange, ?int $extraNumberOfDie, ?int $extraDamageDie, ?array $properties)
    {
        parent::__construct($name, $weight, $value, $description, $effect, $itemCategory);
        $this->weaponCategory = $weaponCategory;
        $this->numberOfDie = $numberOfDie;
        $this->damageDie = $damageDie;
        $this->damageType = $damageType;
        $this->normalRange = $normalRange;
        $this->longRange = $longRange;
        $this->extraNumberOfDie = $extraNumberOfDie;
        $this->extraDamageDie = $extraDamageDie;
        $this->properties = $properties;
    }


    /**
     * @return string
     */
    public function getWeaponCategory (): string
    {
        return $this->weaponCategory;
    }

    /**
     * @param string $weaponCategory
     */
    public function setWeaponCategory (string $weaponCategory): void
    {
        $this->weaponCategory = $weaponCategory;
    }

    /**
     * @return int
     */
    public function getNumberOfDie (): int
    {
        return $this->numberOfDie;
    }

    /**
     * @param int $numberOfDie
     */
    public function setNumberOfDie (int $numberOfDie): void
    {
        $this->numberOfDie = $numberOfDie;
    }

    /**
     * @return mixed
     */
    public function getDamageDie ()
    {
        return $this->damageDie;
    }

    /**
     * @param mixed $damageDie
     */
    public function setDamageDie ($damageDie): void
    {
        $this->damageDie = $damageDie;
    }

    /**
     * @return string
     */
    public function getDamageType (): string
    {
        return $this->damageType;
    }

    /**
     * @param string $damageType
     */
    public function setDamageType (string $damageType): void
    {
        $this->damageType = $damageType;
    }

    /**
     * @return int
     */
    public function getNormalRange (): int
    {
        return $this->normalRange;
    }

    /**
     * @param int $normalRange
     */
    public function setNormalRange (int $normalRange): void
    {
        $this->normalRange = $normalRange;
    }

    /**
     * @return int|null
     */
    public function getLongRange (): ?int
    {
        return $this->longRange;
    }

    /**
     * @param int|null $longRange
     */
    public function setLongRange (?int $longRange): void
    {
        $this->longRange = $longRange;
    }

    /**
     * @return int|null
     */
    public function getExtraNumberOfDie (): ?int
    {
        return $this->extraNumberOfDie;
    }

    /**
     * @param int|null $extraNumberOfDie
     */
    public function setExtraNumberOfDie (?int $extraNumberOfDie): void
    {
        $this->extraNumberOfDie = $extraNumberOfDie;
    }

    /**
     * @return int|null
     */
    public function getExtraDamageDie (): ?int
    {
        return $this->extraDamageDie;
    }

    /**
     * @param int|null $extraDamageDie
     */
    public function setExtraDamageDie (?int $extraDamageDie): void
    {
        $this->extraDamageDie = $extraDamageDie;
    }

    /**
     * @return array|null
     */
    public function getProperties (): ?array
    {
        return $this->properties;
    }

    /**
     * @param array|null $properties
     */
    public function setProperties (?array $properties): void
    {
        $this->properties = $properties;
    }

}
<?php

namespace DND\Character\Dependencies;


class Stat
{

    /**
     * Id of the stat
     *
     * @var int
     */
    private $id;
    /**
     * Stat name
     *
     * @var string
     */
    private $name;

    /**
     * Value of the stat
     *
     * @var int
     */
    private $value;

    /**
     * Stat constructor.
     *
     * @param $name
     * @param $value
     */
    public function __construct ($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
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
     * @return mixed
     */
    public function getName (): string
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getValue (): int
    {
        return $this->value;
    }




}
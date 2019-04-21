<?php
declare (strict_types=1);
namespace DND\Character\Dependencies;


class Language
{

    /**
     * Id of the language
     *
     * @var int
     */
    private $id;

    /**
     * Name of the language
     *
     * @var string
     */
    private $name;

    /**
     * The type of the language IE. Standard or exotic
     *
     * @var string
     */
    private $type;

    /**
     * A list of races that are typical speakers of the language
     *
     * @var array
     */
    private $typicalSpeakers;

    /**
     * The writing style of the language
     *
     * @var string
     */
    private $script;

    /**
     * Language constructor.
     *
     * @param string $name
     * @param string $type
     * @param array  $typicalSpeakers
     * @param string $script
     */
    public function __construct (string $name, string $type, array $typicalSpeakers, string $script)
    {
        $this->name = $name;
        $this->type = $type;
        $this->typicalSpeakers = $typicalSpeakers;
        $this->script = $script;
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
    public function getType (): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType (string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return array
     */
    public function getTypicalSpeakers (): array
    {
        return $this->typicalSpeakers;
    }

    /**
     * @param array $typicalSpeakers
     */
    public function setTypicalSpeakers (array $typicalSpeakers): void
    {
        $this->typicalSpeakers = $typicalSpeakers;
    }

    /**
     * @return string
     */
    public function getScript (): string
    {
        return $this->script;
    }

    /**
     * @param string $script
     */
    public function setScript (string $script): void
    {
        $this->script = $script;
    }

}
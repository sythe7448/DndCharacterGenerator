<?php
declare (strict_types=1);

namespace DND\Character\Dependencies;

class Name
{

    /**
     * The prefix of the characters name.
     *
     * @var string
     */
    private $prefix;

    /**
     * The first name of the character's name.
     *
     * @var string
     */
    private $firstName;

    /**
     * The middle name of the character's name.
     *
     * @var string
     */
    private $middleName;

    /**
     * The last name of the character's name.
     *
     * @var string
     */
    private $lastName;

    /**
     * The suffix of the character's name.
     *
     * @var string
     */
    private $suffix;

    /**
     * The title of the character.
     *
     * @var string
     */
    private $title;

    /**
     * @return string
     */
    public function getPrefix () :string
    {
        return $this->prefix;
    }

    /**
     * @param string $prefix
     */
    public function setPrefix ($prefix): void
    {
        $this->prefix = $prefix;
    }

    /**
     * @return string
     */
    public function getFirstName (): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName ($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getMiddleName (): string
    {
        return $this->middleName;
    }

    /**
     * @param string $middleName
     */
    public function setMiddleName ($middleName): void
    {
        $this->middleName = $middleName;
    }

    /**
     * @return string
     */
    public function getLastName (): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName ($lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getSuffix (): string
    {
        return $this->suffix;
    }

    /**
     * @param string $suffix
     */
    public function setSuffix ($suffix): void
    {
        $this->suffix = $suffix;
    }

    /**
     * @return string
     */
    public function getTitle (): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle ($title): void
    {
        $this->title = $title;
    }


}
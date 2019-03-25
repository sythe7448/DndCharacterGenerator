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
    public function getPrefix ()
    {
        return $this->prefix;
    }

    /**
     * @param string $prefix
     */
    public function setPrefix ($prefix)
    {
        $this->prefix = $prefix;
    }

    /**
     * @return string
     */
    public function getFirstName ()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName ($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getMiddleName ()
    {
        return $this->middleName;
    }

    /**
     * @param string $middleName
     */
    public function setMiddleName ($middleName)
    {
        $this->middleName = $middleName;
    }

    /**
     * @return string
     */
    public function getLastName ()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName ($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getSuffix ()
    {
        return $this->suffix;
    }

    /**
     * @param string $suffix
     */
    public function setSuffix ($suffix)
    {
        $this->suffix = $suffix;
    }

    /**
     * @return string
     */
    public function getTitle ()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle ($title)
    {
        $this->title = $title;
    }


}
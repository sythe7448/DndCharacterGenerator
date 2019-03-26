<?php
declare (strict_types=1);

namespace DND\Character\Dependencies;

class Feature
{

    /**
     * the id of the feature
     *
     * @var int
     */
    private $id;

    /**
     * The name of the feature
     *
     * @var string
     */
    private $name;

    /**
     * The level requirement of the feature if it exists
     *
     * @var int|null
     */
    private $level;

    /**
     * The class requirement of the feature if it exists
     *
     * @var string|null
     */
    private $class;

    /**
     * The class requirement of the feature if it exists
     *
     * @var string|null
     */
    private $subclass;

    /**
     * The race requirement of the feature if it exists
     *
     * @var string|null
     */
    private $race;

    /**
     * The description of the feature
     *
     * @var string
     */
    private $description;
}
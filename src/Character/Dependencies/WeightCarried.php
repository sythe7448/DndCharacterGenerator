<?php
declare (strict_types=1);

namespace DND\Character\Dependencies;

class WeightCarried
{

    /**
     * The total weight of all items the character is carrying
     *
     * @var float
     */
    private $weightCarried;

    /**
     * The max weight the character can carry and still move
     *
     * @var float
     */
    private $maxWeightCarried;

    /**
     * The weight at which the character will walk at half speed
     *
     * @var float
     */
    private $encumberedWeightCarried;

    /**
     * The weight a character can push drag or lift
     *
     * @var float
     */
    private $pushDragLift;

    /**
     * The total weight of the character + the items it is carrying
     *
     * @var float
     */
    private $totalWeight;

}
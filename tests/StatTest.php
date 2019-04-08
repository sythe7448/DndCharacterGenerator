<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use DND\Character\Dependencies\Stat;

class StatTest extends TestCase
{

    /**
     * @var Stat
     */
    private $_class;

    public function setUp (): void
    {
        parent::setUp();
        $this->_class = new Stat('Stat', 15);

    }

    public function testStatGetter (): void
    {
        $this->assertEquals('Stat', $this->_class->getName());
        $this->assertIsInt($this->_class->getValue());
    }
}
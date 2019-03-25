<?php
namespace Tests;


use DND\Generators\StatGenerator;
use PHPUnit\Framework\TestCase;

class StatGeneratorTest extends TestCase
{
    /**
     * @var StatGenerator
     */
    private $_class;

    public function setUp (): void
    {
        parent::setUp();
        $this->_class = new StatGenerator();

    }


    public function testD4 (): void
    {
        $dieSize = 4;
        for ($i = 1; $i <= ($dieSize * 3); $i++) {
            $this->assertLessThanOrEqual($dieSize, $this->_class->d4());
            $this->assertIsInt($this->_class->d4());
            $this->assertGreaterThan(0, $this->_class->d4());
        }
    }

}
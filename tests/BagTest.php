<?php

namespace MamadouAlySy\Tests;

use MamadouAlySy\Bag;
use MamadouAlySy\BagInterface;
use PHPUnit\Framework\TestCase;

class BagTest extends TestCase
{
    protected BagInterface $bag;

    protected function setUp(): void
    {
        parent::setUp();
        $this->bag = new Bag(['item1' => 1, 'item2' => 2]);
    }

    /** @test */
    public function canStoreAValueInsideTheBag()
    {
        $this->bag->add('item2', 2);
        $this->assertEquals(2, count($this->bag));
    }

    /** @test */
    public function canChecksIfAValueExistInsideTheBag()
    {
        $this->assertTrue($this->bag->contains('item1'));
    }

    /** @test */
    public function canGetAValueInsideTheBag()
    {
        $this->assertEquals(1, $this->bag->get('item1'));
    }

    /** @test */
    public function canRemoveAValueInsideTheBag()
    {
        $this->bag->remove('item1');
        $this->assertFalse($this->bag->contains('item1'));
    }

    /** @test */
    public function canEmptyTheBag()
    {
        $this->bag->clear();
        $this->assertFalse($this->bag->contains('item2'));
    }
}

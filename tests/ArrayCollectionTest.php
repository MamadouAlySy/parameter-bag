<?php

declare(strict_types=1);

namespace MamadouAlySy\Tests;

use PHPUnit\Framework\TestCase;
use MamadouAlySy\ArrayCollection;

class ArrayCollectionTest extends TestCase
{
    protected ArrayCollection $bag;

    protected function setUp(): void
    {
        parent::setUp();
        $this->bag = new ArrayCollection(['item1' => 1]);
    }

    public function testCanStoreAValueInsideTheBag()
    {
        $this->bag->add('item2', 2);
        $this->assertEquals(2, $this->bag->getCount());
    }

    public function testCanChecksIfAValueExistInsideTheBag()
    {
        $this->assertTrue($this->bag->contains('item1'));
    }

    public function testCanGetAValueInsideTheBag()
    {
        $this->assertEquals(1, $this->bag->get('item1'));
    }

    public function testCanRemoveAValueInsideTheBag()
    {
        $this->bag->remove('item1');
        $this->assertFalse($this->bag->contains('item1'));
    }
}

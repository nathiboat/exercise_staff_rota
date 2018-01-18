<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\RotaSlotStaff;
class RotaActionTest extends TestCase
{

    public function testHasItem()
    {
        $item = new RotaSlotStaff();
        $this->assertCount(3, $item);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testModelConnectionTest()
    {
        $rotaSlotStaff = new RotaSlotStaff();

        $this->assertInternalType('array',$rotaSlotStaff::all());
    }
}

<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\RotaSlotStaff;

class RotaActionTest extends TestCase
{

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHasValueTest()
    {
        $this->assertDatabaseHas('rota_slot_staff', [
            'workhours' => 9
        ]);
    }

}

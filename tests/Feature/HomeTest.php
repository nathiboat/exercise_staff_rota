<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomeTest extends TestCase
{

    public function testHomeRouteTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

}

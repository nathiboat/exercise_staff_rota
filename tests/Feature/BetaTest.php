<?php

namespace Tests\Feature;

use Tests\TestCase;


class BetaTest extends TestCase
{
    public function testBetaRouteTest()
    {
        $response = $this->get('/beta');

        $response->assertStatus(200);
    }
    public function testDisplaysBeta()
    {
        $this->get('/beta')->assertSeeText('Beta');
    }
}

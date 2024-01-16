<?php

namespace Tests\Feature;

use App\Api\RouterosAPI;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouterosApiTest extends TestCase
{
    public function testRouterosApiProvider()
    {
        $api = new RouterosAPI();
        $api->connect('192.168.18.12', '', '');
        $data = $api->comm('/ip/address/print');

        $this->assertIsArray($data);
    }
}

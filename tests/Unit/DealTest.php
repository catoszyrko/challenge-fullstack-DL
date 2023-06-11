<?php

namespace Tests\Unit;

use App\Models\Deal;
use Tests\TestCase;

class DealTest extends TestCase
{
    public function testGetDeals()
    {
        $cant = 3;
        $deals = Deal::factory($cant)->create();
        $response = $this->get('api/deals');
        $response->assertStatus(200);
        $this->assertJson(json_encode($deals), $response->getContent());
        $responseDeals = json_decode($response->getContent(), true);
        $this->assertJson($deals->count(), count($responseDeals));
        $this->assertJson($cant, count($responseDeals));
    }
}

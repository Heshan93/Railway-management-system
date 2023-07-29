<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

namespace Tests\Feature;

use Tests\TestCase;


class Get_add_promotionTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_get_add_promotions_page()
    {
        
            $response = $this->get('add-promotion');
        
            $response->assertStatus(200);
        
    }
}

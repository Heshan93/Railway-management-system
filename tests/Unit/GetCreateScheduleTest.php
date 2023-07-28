<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

namespace Tests\Feature;

use Tests\TestCase;

class GetCreateScheduleTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_get_create_schedule_page()
    {
        
            $response = $this->get('create_schedule');
        
            $response->assertStatus(302);
        
    }
}

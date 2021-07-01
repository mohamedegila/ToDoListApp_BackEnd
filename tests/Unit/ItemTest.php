<?php
namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ItemTest extends TestCase
{
    use RefreshDatabase;


    /**
     * A Store  unit test example.
     *
     * @return void
     */
    public function test_can_create_task_item()
    {
        $formData=[
            'name' => 'Mohammed unit test example'
        ];

        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->post(route('item.store'), $formData);

        $response->assertStatus(201);
    }


    /**
    * A store using min length unit test example.
    *
    * @return void
    */
    public function test_can_min_length_error()
    {
        $formData=[
            'name' => 'M'
        ];

        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->post(route('item.store'), $formData);

        $response->assertStatus(302); //found redirect
    }
}

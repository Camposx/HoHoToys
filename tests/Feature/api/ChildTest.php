<?php

namespace Tests\Feature\api;

use Tests\TestCase;
use App\Models\Child;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ChildTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfSantaCanGetAllChildrenFromJson(){
        Child::factory(2)->create();

        $response = $this->get(route('apiSantaHome'));
        $response->assertStatus(200)
            ->assertJsonCount(2);
    }

    
}

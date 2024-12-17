<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Child;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ChildTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfSantaCanGetAllChildsInView(){
        $this->withoutExceptionHandling();

        Child::factory(5)->create();
        Child::all();

        $response = $this->get('/santa');
        $response->assertStatus(200)
            ->assertViewIs('santa');
    }

    // public function test_CheckIfSantaCanGetOneChildInView() {
    //     $this->withoutExceptionHandling();

    //     $child = Child::factory()->create();

    //     $response = $this->get('/santa/' . $child->id);

    //     $response->assertStatus(200)
    //         ->assertViewIs('santaShow')
    //         ->assertViewHas('santa', $child);
    // }
}

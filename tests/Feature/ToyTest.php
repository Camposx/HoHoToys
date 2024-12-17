<?php

namespace Tests\Feature;

use App\Models\Toy;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ToyTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfElfCanGetAllToysInView(){
        $this->withoutExceptionHandling();

        Toy::factory(5)->create();
        Toy::all();

        $response = $this->get('/elf');
        $response->assertStatus(200)
            ->assertViewIs('elf');
    }

    // public function test_CheckIfElfCanGetOneToyInView() {
    //     $this->withoutExceptionHandling();

    //     $toy = Toy::factory()->create();

    //     $response = $this->get('/elf/' . $toy->id);

    //     $response->assertStatus(200)
    //         ->assertViewIs('elfShow')
    //         ->assertViewHas('elf', $toy);
    // }
}

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

    public function test_CheckIfSantaCanShowOneChildFromJson(){
        $child = Child::factory()->create();

        $response = $this->get(route('apiSantaShow', $child->id));
        $response->assertStatus(200)
            ->assertJsonFragment(['surname' => $child->surname]);
    }

    public function test_CheckIfSantaCanStoreChildsWithApi(){
        $data = [
            'name' => 'Pepito',
            'surname' => 'Grillo',
            'photo' => 'photoLink',
            'age' => 6,
            'naughty' => false
        ];

        $response = $this->post(route('apiSantaStore'), $data);
        $response->assertStatus(200)
            ->assertJsonFragment(['name' => 'Pepito']);

        $response = $this->get(route('apiSantaHome'));
        $response->assertStatus(200)
            ->assertJsonCount(1);
    }

    public function test_CheckIfSantaCanUpdateChildWithApi(){
        $child = Child::factory()->create();
        $response = $this->get(route('apiSantaHome'));

        $response->assertStatus(200)
            ->assertJsonCount(1)
            ->assertJsonFragment(['name' => $child->name]);

        $response = $this->put(route('apiSantaUpdate', $child->id),
        [
            'name' => 'Modified Name',
            'surname' => $child->surname,
            'photo' => $child->photo,
            'age' => $child->age,
            'naughty' => $child->naughty
        ]);

        $response = $this->get(route('apiSantaHome'));
        $response->assertStatus(200)
            ->assertJsonCount(1)
            ->assertJsonFragment(['name' => 'Modified Name']);
    }

    
}

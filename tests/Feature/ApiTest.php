<?php

namespace Tests\Feature;

use App\Models\Item;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Tests\TestCase;
use Illuminate\Http\Response;

class ApiTest extends TestCase
{
    /**
     * A basic feature test example.
     */

     Use RefreshDatabase;

    public function test_example_get(): void
    {
       $this->json('GET','api/tasks')
        ->assertStatus(Response::HTTP_OK);
    }

    public function test_example_get_failed(): void
    {
       $this->json('GET','api/tasks/1')
        ->assertStatus(Response::HTTP_METHOD_NOT_ALLOWED);
    }

    public function test_example_delete(): void
    {
       $this->json('DELETE','api/tasks/1')
        ->assertStatus(Response::HTTP_OK);
    }

    public function test_example_delete_failed(): void
    {
       $this->json('DELETE','api/tasks/')
        ->assertStatus(Response::HTTP_METHOD_NOT_ALLOWED);
    }

    public function test_example_put(): void
    {
       $this->json('PUT','api/tasks/1')
        ->assertStatus(Response::HTTP_OK);
    }

    public function test_example_put_failed(): void
    {
       $this->json('PUT','api/tasks/')
        ->assertStatus(Response::HTTP_METHOD_NOT_ALLOWED);
    }
    
    /**
     * @doesNotPerformAssertions
     */
    public function test_example_store()
    {
        $name = $this->faker->firstName;

        if (!is_null($name)) {
            new Item([$name]);
            return Response::HTTP_OK;
        }

        
    }

    public function test_example_store_failed() 
    {
        $firstName = '';

        if (is_null($firstName)) {
            return Response::HTTP_BAD_REQUEST;
        }
        
    }
}

<?php

namespace Tests\Feature;

use App\Models\User;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;

class ExampleTest extends TestCase
{



    use WithFaker;
    protected $article;

    
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }



    public function test_a_user_can_register()
    {
        $pass = $this->faker->password();

        $user = $this->postJson(route('register'),[
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => $pass,
            'device_name' => 'android',
            'password_confirmation' => $pass,

            'remember_token' => Str::random(10),
        ])->assertStatus(200);


    }

 

    public function test_a_user_can_login()
    {

        $user = User::first();

        Sanctum::actingAs($user);

        $response = $this->get('/');
        $response->assertStatus(200);


        $response = $this->post('/auth/login', [
            'name' => $user->name
        ]);

  

        $response = $this->get('/api/categories');
        $response->assertOk();
    }


    public function test_logout()
    {
        // $user = User::factory()->create();

        // $token = $user->createToken($user->email)->plainTextToken;
        //   Sanctum::actingAs(
        //     $user
        // );

        // $this->assertAuthenticated("sanctum");

        // $this->withHeader("Authorization", "Bearer $token");

        // $this->assertAuthenticated("sanctum");



        $user = User::first();
        Sanctum::actingAs($user);

        $testResponse = $this->post(route("logout"));
        $testResponse->assertNoContent();

    

    }

    public function testListOfMyCategories()
    {
        $user = User::withCount('categories')->has('categories')->first();
        auth()->login($user);

        $response = $this->get('/');
        $response->assertStatus(200);

        $response2 = $this->get('/api/categories');

        $this->assertEquals(
            $user->categories_count,
            substr_count($response2->getContent(), 'name')

        );
    }



    public function testCreateCategory()
    {
        $user = User::first();
        auth()->login($user);

        $response = $this->post('/api/categories', [
            'name' => "new category",
        ]);

        $response->assertStatus(201);

        $response = $this->get('/api/categories');
        $response->assertStatus(200);

        $this->assertStringContainsString('new category', $response->getContent());
    }


    


}




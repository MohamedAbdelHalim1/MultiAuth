<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Staff;
use Database\Seeders\StaffTableSeeder;

class StaffAuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_staff_can_login()
    {
        // Seed the testing database with staff data
        $this->artisan('db:seed', [
            '--class' => StaffTableSeeder::class,
            '--env' => 'testing',
        ]);
        


        // Attempt to log in
        $response = $this->post('/staff/login', [
            'email' => 'a@a.com',
            'password' => '123456',
        ]);

        // Assert the login was successful
        $response->assertStatus(302);
        $this->assertAuthenticatedAs(Staff::where('email', 'a@a.com')->first(), 'staff');
    }
}

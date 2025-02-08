<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(FieldsSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(ClassroomSeeder::class);
        $this->call(StudentsSeeder::class);
        User::factory()->create([
            'name' => 'Test Admin',
            'isAdmin' => true,
            'email' => 'test@admin.com',
            'password' => Hash::make("12345678")
        ]);

    }
}

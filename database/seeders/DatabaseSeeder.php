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
        User::create([
            'first_name' => 'خانم',
            'last_name' => 'خورزمان',
            'name' => 'خانم خورزمان',
            'isAdmin' => true,
            'username' => 'khorzaman910',
            'password' => Hash::make("12345678")
        ]);
        User::create([
            'first_name' => 'خانم',
            'last_name' => 'گودرزی',
            'name' => 'خانم گودرزی',
            'isAdmin' => true,
            'username' => 'goodarzi916',
            'password' => Hash::make("12345678")
        ]);

    }
}

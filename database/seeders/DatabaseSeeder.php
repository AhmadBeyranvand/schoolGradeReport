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
            'first_name' => 'احمد',
            'last_name' => 'بیرانوند',
            'name' => 'احمد بیرانوند',
            'isAdmin' => true,
            'username' => 'AhmadBeyranvand',
            'password' => Hash::make("18816312")
        ]);

    }
}

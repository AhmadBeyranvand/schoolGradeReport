<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MigrationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Populates the migrations table with initial data.
     */
    public function run()
    {
        DB::table('migrations')->insert([
            [1, '0001_01_01_000000_create_users_table', 1],
            [2, '0001_01_01_000001_create_cache_table', 1],
            [3, '0001_01_01_000002_create_jobs_table', 1],
            [4, '2025_01_29_190456_create_courses_table', 1],
            [5, '2025_01_29_190527_create_grades_table', 1],
            [6, '2025_01_29_190627_create_classrooms_table', 1],
            [7, '2025_01_30_065326_create_fields_table', 1]
        ]);
    }
}
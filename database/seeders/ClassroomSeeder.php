<?php

namespace Database\Seeders;
use DB;
use JeroenZwart\CsvSeeder\CsvSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends CsvSeeder
{
    /**
     * Run the database seeds.
     */
    public function __construct()
    {
        $this->file = '/database/seeders/classrooms.csv';
    }

    public function run(): void
    {
        DB::disableQueryLog();
        parent::run();
    }
}

<?php

namespace Database\Seeders;

use JeroenZwart\CsvSeeder\CsvSeeder;
use App\Models\Course;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->file = '/database/seeders/courses.csv';
    }
    /**
     * Run the database seeds.
     * 1 = tajrobi
     * 2 = riazi
     * 3 = ensani
     * 4 = omoomi
     */
    public function run(): void
    {
        DB::disableQueryLog();
        parent::run();
    }
}

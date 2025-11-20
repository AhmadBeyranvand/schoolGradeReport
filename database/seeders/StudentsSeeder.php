<?php

namespace Database\Seeders;

use DB;
use Hash;
use JeroenZwart\CsvSeeder\CsvSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsSeeder extends CsvSeeder
{
public function __construct()
    {
        $this->file = '/database/seeders/students.csv';
        $this->hashable = ['password'];
        $this->tablename = 'users';
        // $this->parsers = ['password' => function ($value) { 
        //     return Hash::make($value);
        // }];
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::disableQueryLog();
        parent::run();
    }
}

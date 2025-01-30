<?php

namespace Database\Seeders;

use App\Models\Field;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Field::create([
            'title' => 'تجربی'
        ]);
        Field::create([
            'title' => 'ریاضی'
        ]);
        Field::create([
            'title' => 'انسانی'
        ]);
    }
}

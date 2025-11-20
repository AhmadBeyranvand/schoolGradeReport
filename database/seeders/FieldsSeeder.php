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
            'id' => 1,
            'title' => 'تجربی'
        ]);
        Field::create([
            'id' => 2,
            'title' => 'ریاضی'
        ]);
        Field::create([
            'id' => 3,
            'title' => 'انسانی'
        ]);
        Field::create([
            'id' => 4,
            'title' => 'عمومی'
        ]);
    }
}

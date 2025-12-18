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
            'title' => 'شبکه و نرم‌افزار رایانه'
        ]);
        Field::create([
            'id' => 2,
            'title' => 'تولیدکننده و توسعه دهنده پایگاه‌های اینترنتی'
        ]);
        Field::create([
            'id' => 3,
            'title' => 'عمومی'
        ]);

    }
}

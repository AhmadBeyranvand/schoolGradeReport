<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SessionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Populates the sessions table with initial data.
     */
    public function run()
    {
        DB::table('sessions')->insert([
            ['i7RCtInRtFUghkkrCtiUFFTe9Jij2ZZ3bIeJfNnC', null, '13.219.121.241', 'RecordedFuture Global Inventory Crawler', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR0NEOFRBYmFEdE1DVjJHUDFxWkI0Tzk3SGFES2hleTA2bmNQWVNBNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmZhcmFiaXBhbmVsLmlyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1763531408],
            ['zrIudzDCi34QokS0WTzfCPCakLCNBiMgcgsoPX5M', 166, '164.215.172.212', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:144.0) Gecko/20100101 Firefox/144.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSkdoU01hRXMxa1FJOHloaG14RVB0dnFpckxzT3plc0NiUG45bGw1ViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTI6Imh0dHBzOi8vZmFyYWJpcGFuZWwuaXIvYWRtaW4vc3R1ZGVudE1hbmFnZXIvZWRpdC8xMzYiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxNjY7fQ==', 1763537943]
        ]);
    }
}
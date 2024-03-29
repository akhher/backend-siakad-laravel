<?php

namespace Database\Seeders;

use App\Models\Khs;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KhsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Khs::factory()->count(30)->create();
    }
}

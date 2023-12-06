<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'IT', 'category_id' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Programming', 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Network', 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

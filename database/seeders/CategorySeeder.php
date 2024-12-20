<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'category_id' => '4d77698c-414d-4e78-8281-2574fcd10859',
                'name' => 'Sosial',
                'description' => 'Bantuan untuk biaya Sosial, masyarakat.',
                'icon' => '/icons/education.png',
            ],
            [
                'category_id' => (string) Str::uuid(),
                'name' => 'Bencana Alam',
                'description' => 'Donasi untuk korban bencana alam seperti gempa atau banjir.',
                'icon' => '/icons/disaster.png',
            ],
        ];

        // Insert data ke tabel categories
        DB::table('categories')->insert($categories);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Campaign;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $campaign = Campaign::create([
            'category_id' => '4d77698c-414d-4e78-8281-2574fcd10859',
            'title' => 'Donasi untuk Korban Bencana',
            'description' => 'Mari bantu mereka yang terdampak bencana alam.',
            'target_amount' => 10000000,
            'start_date' => now(),
            'end_date' => now()->addDays(30),
            'image_path' => '/images/campaigns/disaster.jpg',
            'status' => true,
        ]);
    }
}

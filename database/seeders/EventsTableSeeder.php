<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->truncate();

        DB::table('events')->insert([
            [
                'name' => 'Summer Sports Festival',
                'location' => 'City Park',
                'beginning_date' => now(),
                'end_date' => now()->addDays(3), 
                'duration_minutes' => null, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Winter Games',
                'location' => 'Autumn Mountain Resort',
                'beginning_date' => now()->addMonths(3), 
                'end_date' => now()->addMonths(3)->addDays(5), 
                'duration_minutes' => null, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
			[
                'name' => 'Tennis Challenges',
                'location' => 'South County',
                'beginning_date' => now()->addDays(3), 
                'end_date' => now()->addDays(3), 
                'duration_minutes' => 120, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
			[
                'name' => 'Basket Kids',
                'location' => 'Sveta Gora',
                'beginning_date' => now()->addDays(7), 
                'end_date' => now()->addDays(8), 
                'duration_minutes' => null, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
			[
                'name' => 'Tan And Volley',
                'location' => 'Saints Constantine And Helena',
                'beginning_date' => now()->addMonths(7), 
                'end_date' => now()->addMonths(8),
                'duration_minutes' => null, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('event_sport')->truncate();

        DB::table('event_sport')->insert([
            [
                'event_id' => 1, 
                'sport_id' => 1, 
            ],
            [
                'event_id' => 2, 
                'sport_id' => 2, 
            ],
            [
                'event_id' => 3, 
                'sport_id' => 3, 
            ],
			[
                'event_id' => 4, 
                'sport_id' => 4, 
            ],
			[
                'event_id' => 5, 
                'sport_id' => 5, 
            ],
			[
                'event_id' => 5, 
                'sport_id' => 1, 
            ],
			[
                'event_id' => 4, 
                'sport_id' => 5, 
            ],
			[
                'event_id' => 3, 
                'sport_id' => 2, 
            ],
			[
                'event_id' => 2, 
                'sport_id' => 3, 
            ],
			[
                'event_id' => 1, 
                'sport_id' => 2, 
            ],
        ]);
    }
}

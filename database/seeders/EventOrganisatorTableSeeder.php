<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventOrganisatorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('event_organisator')->truncate();

        DB::table('event_organisator')->insert([
            [
                'event_id' => 1, 
                'organisator_id' => 1, 
            ],
            [
                'event_id' => 2, 
                'organisator_id' => 2,
            ],
            [
                'event_id' => 3, 
                'organisator_id' => 3, 
            ],
			[
                'event_id' => 4, 
                'organisator_id' => 4, 
            ],
			[
                'event_id' => 5, 
                'organisator_id' => 5, 
            ],
			[
                'event_id' => 1, 
                'organisator_id' => 3, 
            ],
			[
                'event_id' => 2, 
                'organisator_id' => 3, 
            ],
			[
                'event_id' => 3, 
                'organisator_id' => 4, 
            ],[
                'event_id' => 3, 
                'organisator_id' => 5, 
            ],
			[
                'event_id' => 4, 
                'organisator_id' => 5, 
            ],
        ]);
    }
}

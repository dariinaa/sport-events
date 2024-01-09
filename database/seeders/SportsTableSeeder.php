<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sports')->truncate();

        DB::table('sports')->insert([
            [
                'name' => 'Football',
                'describtion' => 'Football, also known as soccer, 
				is a globally popular team sport played between two teams of eleven players each. 
				The objective is to score goals by getting a ball into the opposing team\'s goalpost. 
				It is played on a rectangular field with goalposts at each end. 
				Football is characterized by its fast-paced and dynamic nature, requiring teamwork, 
				skillful ball control, and strategic play. Matches are typically played over two halves, 
				and the team with the most goals at the end of the game emerges as the winner. Football enjoys 
				immense popularity worldwide and is a source of passion and excitement for millions of fans.',
                'season' => 'all year',
                'players_count' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Basketball',
                'describtion' => 'A team sport in which two teams, typically of five players each, compete to shoot a basketball through the opponent\'s goal.',
                'season' => 'all year',
                'players_count' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
			[
				'name' => 'Beach volleyball',
				'describtion' => 'A team sport in which two teams, typically of five players each, compete to shoot a basketball through the opponent\'s goal.',
				'season' => 'summer', 
				'players_count' => 10,
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'name' => 'Tennis',
				'describtion' => 'A racquet sport played between two players (singles) or two teams of two players each (doubles).',
				'season' => 'summer',
				'players_count' => 2,
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'name' => 'Skiing',
				'describtion' => 'A winter sport where participants use skis to glide on snow.',
				'season' => 'winter',
				'players_count' => null, 
				'created_at' => now(),
				'updated_at' => now(),
			],
		]);
    }
}

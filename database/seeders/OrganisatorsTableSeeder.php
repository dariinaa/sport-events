<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganisatorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('organisators')->truncate();

        DB::table('organisators')->insert([
            [
                'name' => 'Елена Иванова',
                'phone_number' => '0889876756',
                'email' => 'organisator1@example.com',
                'website' => 'http://www.organisator1.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Мария Пеева',
                'phone_number' => '0889876565',
                'email' => 'organisator2@example.com',
                'website' => 'http://www.organisator2.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
			[
                'name' => 'Красимира Георгиева',
                'phone_number' => '0889876756',
                'email' => 'organisator3@example.com',
                'website' => 'http://www.organisator3.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Венелина Стойчева',
                'phone_number' => '0889876565',
                'email' => 'organisator4@example.com',
                'website' => 'http://www.organisator4.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
			[
                'name' => 'Катрин Великова',
                'phone_number' => '0889876565',
                'email' => 'organisator5@example.com',
                'website' => 'http://www.organisator5.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

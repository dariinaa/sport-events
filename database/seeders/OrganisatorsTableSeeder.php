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
                'name' => 'Samantha Dawson',
                'phone_number' => '0889876756',
                'email' => 'organisator1@example.com',
                'website' => 'http://www.organisator1.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Karina Todorova',
                'phone_number' => '0889876565',
                'email' => 'organisator2@example.com',
                'website' => 'http://www.organisator2.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
			[
                'name' => 'Julia Simons',
                'phone_number' => '0889876756',
                'email' => 'organisator3@example.com',
                'website' => 'http://www.organisator3.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Katy Watson',
                'phone_number' => '0889876565',
                'email' => 'organisator4@example.com',
                'website' => 'http://www.organisator4.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
			[
                'name' => 'Jenna Everdeen',
                'phone_number' => '0889876565',
                'email' => 'organisator5@example.com',
                'website' => 'http://www.organisator5.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

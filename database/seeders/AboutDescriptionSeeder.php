<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_descriptions')->insert([
            [
                'description' => 'Name:',
                'content' => 'Tanghe Kevin',
            ],
            [
                'description' => 'Website:',
                'content' => 'www.tanghekevin.com',
            ],
            [
                'description' => 'Phone:',
                'content' => '+32 477 59 53 57',
            ],
            [
                'description' => 'City:',
                'content' => 'Brussels',
            ],
            [
                'description' => 'Age:',
                'content' => '25',
            ],
            [
                'description' => 'Degree:',
                'content' => 'CESS',
            ],
            [
                'description' => 'Email:',
                'content' => 'tanghekevin1@gmail.com',
            ],
            [
                'description' => 'Freelance:',
                'content' => 'Not Available',
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_projects')->insert([
            [
                'icon' => 'icofont-simple-smile',
                'color' => '#20b38e',
                'number' => '42',
                'description' => 'Happy Clients',
                'content' => 'with their site and my feedback on their projects'
            ],
            [
                'icon' => 'icofont-document-folder',
                'color' => '#8a1ac2',
                'number' => '53',
                'description' => 'Projects',
                'content' => 'that I carried out to satisfy you at least that I can.'
            ],
            [
                'icon' => 'icofont-clock-time',
                'color' => '#2cbdee',
                'number' => '3',
                'description' => 'Years of experience',
                'content' => '3 years that I discovered this passion !'
            ],
        ]);
    }
}

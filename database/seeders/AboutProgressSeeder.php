<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutProgressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_progress')->insert([
            [
                'language' => 'HTML',
                'pourcentage' => '90'
            ],
            [
                'language' => 'CSS',
                'pourcentage' => '85'
            ],
            [
                'language' => 'SCSS',
                'pourcentage' => '85'
            ],
            [
                'language' => 'JS',
                'pourcentage' => '80'
            ],
            [
                'language' => 'DOM',
                'pourcentage' => '85'
            ],
            [
                'language' => 'REACT',
                'pourcentage' => '75'
            ],
            [
                'language' => 'LARAVEL/PHP',
                'pourcentage' => '70'
            ],
        ]);
    }
}

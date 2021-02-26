<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_titles')->insert([
            'ombreTitre' => 'About Me',
            'titre' => 'About Me',
            'sousTitre' => 'Here is my general information to contact me and see my skills'
        ]);
    }
}

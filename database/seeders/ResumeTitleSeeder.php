<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumeTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resume_titles')->insert([
            'ombreTitre' => 'My Resume',
            'titre' => 'My Resume',
            'sousTitre' => 'What is my background ?'
        ]);
    }
}

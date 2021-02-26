<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navbars')->insert([
            [
                'chemin' => '#home',
                'titre' => 'Home'
            ],
            [
                'chemin' => '#about',
                'titre' => 'About'
            ],
            [
                'chemin' => '#resume',
                'titre' => 'Resume'
            ],
            [
                'chemin' => '#services',
                'titre' => 'Strong Points'
            ],
            [
                'chemin' => '#portfolio',
                'titre' => 'Portfolio'
            ],
            [
                'chemin' => '#contact',
                'titre' => 'Contact'
            ],
        ]);
    }
}

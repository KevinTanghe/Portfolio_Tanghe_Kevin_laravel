<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumeEducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resume_education')->insert([
            [
                'mainTitle' => 'Education',
                'title' => "certificat d'enseignement secondaire supérieur",
                'years' => '2012 - 2015',
                'lieu' => "L'institut Emile Gryzon",
                'content' => "I went from my 3rd to my 7th in my bakery studies or at the end I received my upper secondary school certificate"
            ],
            [
                'mainTitle' => "",
                'title' => "Formation en Web via MolenGeek",
                'years' => '2020 - 2021',
                'lieu' => "Place de la Minoterie 10, 1080 Molenbeek-Saint-Jean",
                'content' => "This is where I did my training and which allowed me to discover the world of the web and programming"
            ],
        ]);
    }
}

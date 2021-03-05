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
            [
                "head" => "Sumary",
                "title" => "TANGHE KEVIN",
                "years" => "",
                "sousTitle" => "Former baker and manager at Colruyt, I changed management and learned web development and programming through training. I develop websites on the front-end as a back-end for companies, non-profit organizations, individuals.",
                "content" => ""
            ],
            [
                "head" => "Education",
                "title" => "CERTIFICAT D'ENSEIGNEMENT SECONDAIRE SUPÉRIEUR",
                "years" => "2012 - 2015",
                "sousTitle" => "L'institut Emile Gryzon",
                "content" => "I went from my 3rd to my 7th in my bakery studies or at the end I received my upper secondary school certificate"
            ],
            [
                "head" => "",
                "title" => "FORMATION EN WEB VIA MOLENGEEK",
                "years" => "2020 - 2021",
                "sousTitle" => "Place de la Minoterie 10, 1080 Molenbeek-Saint-Jean",
                "content" => "This is where I did my training and which allowed me to discover the world of the web and programming"
            ],
            [
                "head" => "Professional Experience",
                "title" => "MANAGER",
                "years" => "2018 - 2020",
                "sousTitle" => "Colryut, Brussels, BE",
                "content" => ""
            ],
            [
                "head" => "",
                "title" => "STORE MANAGER",
                "years" => "2015 - 2018",
                "sousTitle" => "Delhaize, Brussels, BE",
                "content" => ""
            ],
        ]);
    }
}

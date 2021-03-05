<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titles')->insert([
            [
                "title" => "Tanghe Kevin",
                'sousTitle' => "I'm a Web Developer in Brussels"
            ],
            [
                "title" => "ABOUT ME",
                'sousTitle' => "Here is my general information to contact me and see my skills"
            ],
            [
                "title" => "MY RESUME",
                'sousTitle' => "What is my background ?"
            ],
            [
                "title" => "MY STRONG POINTS",
                'sousTitle' => "With my 5 years of experience in the working world, these have become my strengths."
            ],
            [
                "title" => "MY PORTFOLIO",
                'sousTitle' => "Here are some of the websites I have made."
            ],
            [
                "title" => "CONTACT ME",
                'sousTitle' => "Here is my personal information."
            ],
        ]);
    }
}

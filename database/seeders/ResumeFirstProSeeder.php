<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumeFirstProSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resume_first_pros')->insert([
            [
                'mainTitle' => 'Professional Experience',
                'title' => 'Manager',
                'years' => '2018 - 2020',
                'lieu' => 'Colryut, Brussels, BE'
            ],
        ]);
    }
}

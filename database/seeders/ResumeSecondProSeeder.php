<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumeSecondProSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resume_second_pros')->insert([
            
                'title' => 'Store Manager',
                'years' => '2015 - 2018',
                'lieu' => 'Delhaize, Brussels, BE'

        ]);
    }
}

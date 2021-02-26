<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumeSecondJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resume_second_jobs')->insert([
            [
                'content' => 'Responsible for the deployment of electronic labels in the Brussels region',
            ],
            [
                'content' => 'Work simplifier to employ them in store for their health and productivity within the company',
            ],
            [
                'content' => 'Provide training on stress management at work and in life',
            ],
        ]);
    }
}

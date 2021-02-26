<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumeFirstJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resume_first_jobs')->insert([
            [
                'content' => 'Inventory management'
            ],
            [
                'content' => 'Planning and managing staff vacations and days off'
            ],
            [
                'content' => 'Manages the accounts of the cash registers'
            ],
        ]);
    }
}

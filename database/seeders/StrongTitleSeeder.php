<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StrongTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('strong_titles')->insert([
            'ombreTitle' => 'My Strong Points',
            'title' => 'My Strong Points',
            'sousTitle' => 'With my 5 years of experience in the working world, these have become my strengths.'
        ]);
    }
}

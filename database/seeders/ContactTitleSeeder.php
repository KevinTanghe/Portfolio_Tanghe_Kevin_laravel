<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_titles')->insert([
            'ombreTitle' => 'Contact Me',
            'title' => 'Contact Me',
            'sousTitle' => 'Here is my personal information.'
        ]);
    }
}

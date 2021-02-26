<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolio_titles')->insert([
            'ombreTitle' => 'My Portfolio',
            'title' => 'My Portfolio',
            'sousTitle' => 'Here are some of the websites I have made.'
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolio_galleries')->insert([
            [
                'img' => 'assets/img/portfolio/portfolio-1.png',
                'title' => 'App 1'
            ],
            [
                'img' => 'assets/img/portfolio/portfolio-2.png',
                'title' => 'App 2'
            ],
            [
                'img' => 'assets/img/portfolio/portfolio-3.png',
                'title' => 'App 3'
            ],
            [
                'img' => 'assets/img/portfolio/portfolio-4.png',
                'title' => 'App 4'
            ],
            [
                'img' => 'assets/img/portfolio/portfolio-5.png',
                'title' => 'App 5'
            ],
            [
                'img' => 'assets/img/portfolio/portfolio-6.png',
                'title' => 'App 6'
            ],
            [
                'img' => 'assets/img/portfolio/portfolio-7.png',
                'title' => 'App 7'
            ],
            [
                'img' => 'assets/img/portfolio/portfolio-8.png',
                'title' => 'App 8'
            ],
            [
                'img' => 'assets/img/portfolio/portfolio-9.png',
                'title' => 'App 9'
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footer_links')->insert([
            [
                'lien' => 'https://twitter.com/KenozOW',
                'name' => 'twitter',
                'icon' => 'bx bxl-twitter'
            ],
            [
                'lien' => 'https://www.facebook.com/kevin.tanghe.7/',
                'name' => 'facebook',
                'icon' => 'bx bxl-facebook'
            ],
            [
                'lien' => '#',
                'name' => 'instagram',
                'icon' => 'bx bxl-instagram'
            ],
            [
                'lien' => 'https://github.com/KevinTanghe',
                'name' => 'github',
                'icon' => 'bx bxl-github'
            ],
            [
                'lien' => '#',
                'name' => 'linkedin',
                'icon' => 'bx bxl-linkedin'
            ],
        ]);
    }
}

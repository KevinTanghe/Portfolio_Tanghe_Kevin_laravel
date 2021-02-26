<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSocialLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_social_links')->insert([
            [
                'lien' => 'https://twitter.com/KenozOW',
                'name' => 'twitter',
                'icon' => 'icofont-twitter'
            ],
            [
                'lien' => 'https://www.facebook.com/kevin.tanghe.7/',
                'name' => 'facebook',
                'icon' => 'icofont-facebook'
            ],
            [
                'lien' => '#',
                'name' => 'instagram',
                'icon' => 'icofont-instagram'
            ],
            [
                'lien' => 'https://github.com/KevinTanghe',
                'name' => 'github',
                'icon' => 'icofont-github'
            ],
            [
                'lien' => '#',
                'name' => 'linkedin',
                'icon' => 'icofont-linkedin'
            ],
        ]);
    }
}

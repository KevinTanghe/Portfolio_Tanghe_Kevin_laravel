<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_socials')->insert([
            [
                'icon' => 'bx bx-share-alt',
                'title' => 'Socials Profiles',
            ],
        ]);
    }
}

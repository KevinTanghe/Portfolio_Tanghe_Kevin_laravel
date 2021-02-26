<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterCopyrightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footer_copyrights')->insert([
            'copyright' => '© Copyright ',
            'name' => 'Kevin',
            'droit' => '. All Rights Reserved'
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactCallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_calls')->insert([
            'icon' => 'bx bx-phone-call',
            'title' => 'Call Me'
        ]);
    }
}

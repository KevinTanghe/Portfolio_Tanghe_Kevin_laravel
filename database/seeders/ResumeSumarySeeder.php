<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumeSumarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resume_sumaries')->insert([
            'mainTitre' => 'Sumary',
            'titre' => 'Tanghe Kevin',
            'description' => "Former baker and manager at Colruyt, I changed management and learned web development and programming through training. I develop websites on the front-end as a back-end for companies, non-profit organizations, individuals."
        ]);
    }
}

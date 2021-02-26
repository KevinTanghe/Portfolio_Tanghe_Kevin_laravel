<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumeSumaryContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resume_sumary_contents')->insert([
            [
                'content' => 'Boulevard Louis Mettewie n°64 E1, 1080 Molenbeek-Saint-Jean'
            ],
            [
                'content' => '+32 477 59 53 57'
            ],
            [
                'content' => 'tanghekevin1@gmail.com'
            ],
        ]);
    }
}

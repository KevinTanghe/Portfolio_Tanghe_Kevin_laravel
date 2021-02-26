<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StrongCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('strong_cards')->insert([
            [
                'icon' => 'bx bxs-business',
                'title' => 'Team Work.',
                'content' => 'I have learned through experience how important team spirit is in a company and that it allows quality work.'
            ],
            [
                'icon' => 'bx bx-file',
                'title' => 'Learn with documentation.',
                'content' => 'I learned during my training to be autonomous and to know how to document myself for the problems that I encounter during my development.'
            ],
            [
                'icon' => 'bx bx-tachometer',
                'title' => 'Productivity.',
                'content' => "La productivité est importante, il faut suivre le rythme et gérer les deadlines pour le bien de l'entreprise."
            ],
            [
                'icon' => 'bx bx-message-dots',
                'title' => 'Learn with your advice.',
                'content' => 'Any advice is positive and must allow me to move forward in my work, I would put all of this in place.'
            ],
        ]);
    }
}

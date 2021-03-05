<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            NavbarSeeder::class,
            AboutDescriptionSeeder::class,
            AboutProjectSeeder::class,
            AboutProgressSeeder::class,

            ResumeTitleSeeder::class,
            ResumeSumaryContentSeeder::class,
            ResumeFirstJobSeeder::class,
            ResumeSecondJobSeeder::class,

            StrongCardSeeder::class,

            PortfolioGallerySeeder::class,

            ContactTitleSeeder::class,
            ContactSocialLinkSeeder::class,
            ContactEmailLinkSeeder::class,
            ContactCallLinkSeeder::class,

            FooterLinkSeeder::class,
            FooterCopyrightSeeder::class,

            TitleSeeder::class,

        ]);
    }
}

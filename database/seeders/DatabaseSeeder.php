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
            ResumeSumarySeeder::class,
            ResumeSumaryContentSeeder::class,
            ResumeEducationSeeder::class,
            ResumeFirstProSeeder::class,
            ResumeFirstJobSeeder::class,
            ResumeSecondProSeeder::class,
            ResumeSecondJobSeeder::class,

            StrongCardSeeder::class,

            PortfolioGallerySeeder::class,

            ContactSocialSeeder::class,
            ContactSocialLinkSeeder::class,
            ContactEmailSeeder::class,
            ContactEmailLinkSeeder::class,
            ContactCallSeeder::class,
            ContactCallLinkSeeder::class,

            FooterLinkSeeder::class,
            FooterCopyrightSeeder::class,

            TitleSeeder::class,

        ]);
    }
}

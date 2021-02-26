<?php

namespace Database\Seeders;

use App\Models\FooterCopyright;
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
            HeroSeeder::class,
            AboutTitleSeeder::class,
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

            StrongTitleSeeder::class,
            StrongCardSeeder::class,

            PortfolioTitleSeeder::class,
            PortfolioGallerySeeder::class,

            ContactTitleSeeder::class,
            ContactSocialSeeder::class,
            ContactSocialLinkSeeder::class,
            ContactEmailSeeder::class,
            ContactEmailLinkSeeder::class,
            ContactCallSeeder::class,
            ContactCallLinkSeeder::class,

            FooterTitleSeeder::class,
            FooterLinkSeeder::class,
            FooterCopyrightSeeder::class

        ]);
    }
}

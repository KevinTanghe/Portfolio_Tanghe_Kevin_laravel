<?php

namespace App\Http\Controllers;

use App\Models\AboutDescription;
use App\Models\AboutProgress;
use App\Models\AboutProject;
use App\Models\ContactCallLink;
use App\Models\ContactEmailLink;
use App\Models\ContactSocialLink;
use App\Models\ContactTitle;
use App\Models\FooterCopyright;
use App\Models\FooterLink;
use App\Models\Navbar;
use App\Models\PortfolioGallery;
use App\Models\ResumeFirstJob;
use App\Models\resumeSecondJob;
use App\Models\ResumeSumaryContent;
use App\Models\resumeTitle;
use App\Models\StrongCard;
use App\Models\Title;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $navbar = Navbar::all();
        $title = Title::all();

        $aboutDescription = AboutDescription::all();
        $aboutProject = AboutProject::all();
        $aboutProgress = AboutProgress::all();

        $resumeTitle = resumeTitle::all();
        $resumeSumaryContent = ResumeSumaryContent::all();
        $resumeFirstJob = ResumeFirstJob::all();
        $resumeSecondJob = resumeSecondJob::all();

        $strongCard = StrongCard::all();

        $portfolioGallery = PortfolioGallery::all();

        $contactTitle = ContactTitle::all();
        $contactSocialLink = ContactSocialLink::all();
        $contactEmailLink = ContactEmailLink::all();
        $contactCallLink = ContactCallLink::all();

        $footerLink = FooterLink::all();
        $footerCopyright = FooterCopyright::all();


        return view('pages/welcome', compact('navbar', 'aboutDescription', 'aboutProject', 'aboutProgress', 'resumeSumaryContent', 'resumeFirstJob', 'resumeSecondJob', 'strongCard', 'portfolioGallery','contactSocialLink', 'contactEmailLink', 'contactCallLink', 'footerLink', 'footerCopyright', 'title', 'resumeTitle', 'contactTitle'));
    }

    public function back() {

        return view('backoffice/pages/home');
    }
}

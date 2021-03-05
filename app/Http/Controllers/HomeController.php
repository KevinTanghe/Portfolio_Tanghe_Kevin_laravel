<?php

namespace App\Http\Controllers;

use App\Models\AboutDescription;
use App\Models\AboutProgress;
use App\Models\AboutProject;
use App\Models\ContactCall;
use App\Models\ContactCallLink;
use App\Models\ContactEmail;
use App\Models\ContactEmailLink;
use App\Models\ContactSocial;
use App\Models\ContactSocialLink;
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

        $aboutDescription = AboutDescription::all();
        $aboutProject = AboutProject::all();
        $aboutProgress = AboutProgress::all();

        $resumeTitle = resumeTitle::all();
        $resumeSumaryContent = ResumeSumaryContent::all();
        $resumeFirstJob = ResumeFirstJob::all();
        $resumeSecondJob = resumeSecondJob::all();

        $strongCard = StrongCard::all();

        $portfolioGallery = PortfolioGallery::all();

        $contactSocial = ContactSocial::all();
        $contactSocialLink = ContactSocialLink::all();
        $contactEmail = ContactEmail::all();
        $contactEmailLink = ContactEmailLink::all();
        $contactCall = ContactCall::all();
        $contactCallLink = ContactCallLink::all();

        $footerLink = FooterLink::all();
        $footerCopyright = FooterCopyright::all();

        $title = Title::all();

        return view('pages/welcome', compact('navbar', 'aboutDescription', 'aboutProject', 'aboutProgress', 'resumeSumaryContent', 'resumeFirstJob', 'resumeSecondJob', 'strongCard', 'portfolioGallery', 'contactSocial','contactSocialLink', 'contactEmail', 'contactEmailLink', 'contactCall', 'contactCallLink', 'footerLink', 'footerCopyright', 'title', 'resumeTitle'));
    }

    public function back() {

        return view('backoffice/pages/home');
    }
}

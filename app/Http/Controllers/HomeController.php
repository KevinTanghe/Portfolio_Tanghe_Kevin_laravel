<?php

namespace App\Http\Controllers;

use App\Models\AboutDescription;
use App\Models\AboutProgress;
use App\Models\AboutProject;
use App\Models\AboutTitle;
use App\Models\ContactCall;
use App\Models\ContactCallLink;
use App\Models\ContactEmail;
use App\Models\ContactEmailLink;
use App\Models\ContactSocial;
use App\Models\ContactSocialLink;
use App\Models\ContactTitle;
use App\Models\FooterCopyright;
use App\Models\FooterLink;
use App\Models\FooterTitle;
use App\Models\Hero;
use App\Models\Navbar;
use App\Models\PortfolioGallery;
use App\Models\PortfolioTitle;
use App\Models\ResumeEducation;
use App\Models\ResumeFirstJob;
use App\Models\ResumeFirstPro;
use App\Models\resumeSecondJob;
use App\Models\ResumeSecondPro;
use App\Models\ResumeSumary;
use App\Models\ResumeSumaryContent;
use App\Models\ResumeTitle;
use App\Models\StrongCard;
use App\Models\StrongTitle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $navbar = Navbar::all();
        $hero = Hero::all();

        $aboutTitle = AboutTitle::all();
        $aboutDescription = AboutDescription::all();
        $aboutProject = AboutProject::all();
        $aboutProgress = AboutProgress::all();

        $resumeTitle = ResumeTitle::all();
        $resumeSumary = ResumeSumary::all();
        $resumeSumaryContent = ResumeSumaryContent::all();
        $resumeEducation = ResumeEducation::all();
        $resumeFirstPro = ResumeFirstPro::all();
        $resumeFirstJob = ResumeFirstJob::all();
        $resumeSecondPro = ResumeSecondPro::all();
        $resumeSecondJob = resumeSecondJob::all();

        $strongTitle = StrongTitle::all();
        $strongCard = StrongCard::all();

        $portfolioTitle = PortfolioTitle::all();
        $portfolioGallery = PortfolioGallery::all();

        $contactTitle = ContactTitle::all();
        $contactSocial = ContactSocial::all();
        $contactSocialLink = ContactSocialLink::all();
        $contactEmail = ContactEmail::all();
        $contactEmailLink = ContactEmailLink::all();
        $contactCall = ContactCall::all();
        $contactCallLink = ContactCallLink::all();

        $footerTitle = FooterTitle::all();
        $footerLink = FooterLink::all();
        $footerCopyright = FooterCopyright::all();

        return view('pages/welcome', compact('navbar', 'hero', 'aboutTitle', 'aboutDescription', 'aboutProject', 'aboutProgress', 'resumeTitle', 'resumeSumary', 'resumeSumaryContent', 'resumeEducation', 'resumeFirstPro', 'resumeFirstJob', 'resumeSecondPro', 'resumeSecondJob', 'strongTitle', 'strongCard', 'portfolioTitle', 'portfolioGallery', 'contactTitle', 'contactSocial','contactSocialLink', 'contactEmail', 'contactEmailLink', 'contactCall', 'contactCallLink', 'footerTitle', 'footerLink', 'footerCopyright'));
    }

    public function back() {

        return view('backoffice/pages/home');
    }
}

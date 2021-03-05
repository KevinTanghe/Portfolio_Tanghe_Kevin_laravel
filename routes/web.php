<?php

use App\Http\Controllers\AboutDescriptionController;
use App\Http\Controllers\AboutProgressController;
use App\Http\Controllers\AboutProjectController;
use App\Http\Controllers\ContactCallController;
use App\Http\Controllers\ContactCallLinkController;
use App\Http\Controllers\ContactEmailController;
use App\Http\Controllers\ContactEmailLinkController;
use App\Http\Controllers\ContactSocialController;
use App\Http\Controllers\ContactSocialLinkController;
use App\Http\Controllers\FooterCopyrightController;
use App\Http\Controllers\FooterLinkController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\PortfolioGalleryController;
use App\Http\Controllers\ResumeFirstJobController;
use App\Http\Controllers\ResumeSecondJobController;
use App\Http\Controllers\ResumeSumaryContentController;
use App\Http\Controllers\ResumeTitleController;
use App\Http\Controllers\StrongCardController;
use App\Http\Controllers\TitleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/back', [HomeController::class, 'back']);

                    // Navbar

Route::get('/back-navbar', [NavbarController::class, 'index']);
Route::post('/store-navbar', [NavbarController::class, 'store']);
Route::get('/edit-navbar/{id}', [NavbarController::class, 'edit']);
Route::post('/update-navbar/{id}', [NavbarController::class, 'update']);
Route::get('/delete-navbar/{id}', [NavbarController::class, 'destroy']);


                    // About Description

Route::get('/back-aboutDescription', [AboutDescriptionController::class, 'index']);
Route::post('store-aboutDescription', [AboutDescriptionController::class, 'store']);
Route::get('/edit-aboutDescription/{id}', [AboutDescriptionController::class, "edit"]);
Route::post('/update-aboutDescription/{id}', [AboutDescriptionController::class, 'update']);
Route::get('/delete-aboutDescription/{id}', [AboutDescriptionController::class, 'destroy']);

                    // About project

Route::get('back-aboutProject', [AboutProjectController::class, 'index']);
Route::post('store-aboutProject', [AboutProjectController::class, 'store']);
Route::get('/edit-aboutProject/{id}', [AboutProjectController::class, "edit"]);
Route::post('/update-aboutProject/{id}', [AboutProjectController::class, 'update']);
Route::get('/delete-aboutProject/{id}', [AboutProjectController::class, 'destroy']);

                    // About Progress

Route::get('back-aboutProgress', [AboutProgressController::class, 'index']);
Route::post('store-aboutProgress', [AboutProgressController::class, 'store']);
Route::get('/edit-aboutProgress/{id}', [AboutProgressController::class, "edit"]);
Route::post('/update-aboutProgress/{id}', [AboutProgressController::class, 'update']);
Route::get('/delete-aboutProgress/{id}', [AboutProgressController::class, 'destroy']);

                        // Resume Sumary Content

Route::get('back-resumeSumaryContent', [ResumeSumaryContentController::class, 'index']);
Route::post('store-resumeSumaryContent', [ResumeSumaryContentController::class, 'store']);
Route::get('/edit-resumeSumaryContent/{id}', [ResumeSumaryContentController::class, "edit"]);
Route::post('/update-resumeSumaryContent/{id}', [ResumeSumaryContentController::class, 'update']);
Route::get('/delete-resumeSumaryContent/{id}', [ResumeSumaryContentController::class, 'destroy']);

                        // Resume First Job

Route::get('back-resumeFirstJob', [ResumeFirstJobController::class, 'index']);
Route::post('store-resumeFirstJob', [ResumeFirstJobController::class, 'store']);
Route::get('/edit-resumeFirstJob/{id}', [ResumeFirstJobController::class, "edit"]);
Route::post('/update-resumeFirstJob/{id}', [ResumeFirstJobController::class, 'update']);
Route::get('/delete-resumeFirstJob/{id}', [ResumeFirstJobController::class, 'destroy']);

                        // Resume Second Job

Route::get('back-resumeSecondJob', [ResumeSecondJobController::class, 'index']);
Route::post('store-resumeSecondJob', [ResumeSecondJobController::class, 'store']);
Route::get('/edit-resumeSecondJob/{id}', [ResumeSecondJobController::class, "edit"]);
Route::post('/update-resumeSecondJob/{id}', [ResumeSecondJobController::class, 'update']);
Route::get('/delete-resumeSecondJob/{id}', [ResumeSecondJobController::class, 'destroy']);

                        // Strong Card

Route::get('back-strongCard', [StrongCardController::class, 'index']);
Route::post('store-strongCard', [StrongCardController::class, 'store']);
Route::get('/edit-strongCard/{id}', [StrongCardController::class, "edit"]);
Route::post('/update-strongCard/{id}', [StrongCardController::class, 'update']);
Route::get('/delete-strongCard/{id}', [StrongCardController::class, 'destroy']);

                        // Portfolio Gallery

Route::get('back-portfolioGallery', [PortfolioGalleryController::class, 'index']);
Route::post('store-portfolioGallery', [PortfolioGalleryController::class, 'store']);
Route::get('/edit-portfolioGallery/{id}', [PortfolioGalleryController::class, "edit"]);
Route::post('/update-portfolioGallery/{id}', [PortfolioGalleryController::class, 'update']);
Route::get('/delete-portfolioGallery/{id}', [PortfolioGalleryController::class, 'destroy']);

                        // Contact Social

Route::get('back-contactSocial', [ContactSocialController::class, 'index']);
Route::post('store-contactSocial', [ContactSocialController::class, 'store']);
Route::get('/edit-contactSocial/{id}', [ContactSocialController::class, "edit"]);
Route::post('/update-contactSocial/{id}', [ContactSocialController::class, 'update']);
Route::get('/delete-contactSocial/{id}', [ContactSocialController::class, 'destroy']);

                        // Contact Social Link

Route::get('back-contactSocialLink', [ContactSocialLinkController::class, 'index']);
Route::post('store-contactSocialLink', [ContactSocialLinkController::class, 'store']);
Route::get('/edit-contactSocialLink/{id}', [ContactSocialLinkController::class, "edit"]);
Route::post('/update-contactSocialLink/{id}', [ContactSocialLinkController::class, 'update']);
Route::get('/delete-contactSocialLink/{id}', [ContactSocialLinkController::class, 'destroy']);

                        // Contact Email

Route::get('back-contactEmail', [ContactEmailController::class, 'index']);
Route::post('store-contactEmail', [ContactEmailController::class, 'store']);
Route::get('/edit-contactEmail/{id}', [ContactEmailController::class, "edit"]);
Route::post('/update-contactEmail/{id}', [ContactEmailController::class, 'update']);
Route::get('/delete-contactEmail/{id}', [ContactEmailController::class, 'destroy']);

                        // Contact Email Link

Route::get('back-contactEmailLink', [ContactEmailLinkController::class, 'index']);
Route::post('store-contactEmailLink', [ContactEmailLinkController::class, 'store']);
Route::get('/edit-contactEmailLink/{id}', [ContactEmailLinkController::class, "edit"]);
Route::post('/update-contactEmailLink/{id}', [ContactEmailLinkController::class, 'update']);
Route::get('/delete-contactEmailLink/{id}', [ContactEmailLinkController::class, 'destroy']);

                        // Contact Call

Route::get('back-contactCall', [ContactCallController::class, 'index']);
Route::post('store-contactCall', [ContactCallController::class, 'store']);
Route::get('/edit-contactCall/{id}', [ContactCallController::class, "edit"]);
Route::post('/update-contactCall/{id}', [ContactCallController::class, 'update']);
Route::get('/delete-contactCall/{id}', [ContactCallController::class, 'destroy']);

                        // Contact Call Link

Route::get('back-contactCallLink', [ContactCallLinkController::class, 'index']);
Route::post('store-contactCallLink', [ContactCallLinkController::class, 'store']);
Route::get('/edit-contactCallLink/{id}', [ContactCallLinkController::class, "edit"]);
Route::post('/update-contactCallLink/{id}', [ContactCallLinkController::class, 'update']);
Route::get('/delete-contactCallLink/{id}', [ContactCallLinkController::class, 'destroy']);

                        // Footer Link

Route::get('back-footerLink', [FooterLinkController::class, 'index']);
Route::post('store-footerLink', [FooterLinkController::class, 'store']);
Route::get('/edit-footerLink/{id}', [FooterLinkController::class, "edit"]);
Route::post('/update-footerLink/{id}', [FooterLinkController::class, 'update']);
Route::get('/delete-footerLink/{id}', [FooterLinkController::class, 'destroy']);

                        // Footer Copyright

Route::get('back-footerCopyright', [FooterCopyrightController::class, 'index']);
Route::post('store-footerCopyright', [FooterCopyrightController::class, 'store']);
Route::get('/edit-footerCopyright/{id}', [FooterCopyrightController::class, "edit"]);
Route::post('/update-footerCopyright/{id}', [FooterCopyrightController::class, 'update']);
Route::get('/delete-footerCopyright/{id}', [FooterCopyrightController::class, 'destroy']);

                        // Title 

Route::get('back-title', [TitleController::class, 'index']);
Route::post('store-title', [TitleController::class, 'store']);
Route::get('/edit-title/{id}', [TitleController::class, "edit"]);
Route::post('/update-title/{id}', [TitleController::class, 'update']);
Route::get('/delete-title/{id}', [TitleController::class, 'destroy']);


                        // ResumeTitle

Route::get('back-resumeTitle', [ResumeTitleController::class, 'index']);
Route::post('store-resumeTitle', [ResumeTitleController::class, 'store']);
Route::get('/edit-resumeTitle/{id}', [ResumeTitleController::class, "edit"]);
Route::post('/update-resumeTitle/{id}', [ResumeTitleController::class, 'update']);
Route::get('/delete-resumeTitle/{id}', [ResumeTitleController::class, 'destroy']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\PrivacyPolicyController;
use App\Http\Controllers\Frontend\RefundPolicyController;
use App\Http\Controllers\Frontend\TermsConditionController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\CareerController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogCommentController;
use App\Http\Controllers\Frontend\HomeController;


Route::group(['middleware' => ['is_user']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('front');
    Route::get('/case-details/{service_slug}', [HomeController::class, 'casestudyDetails'])->name('casestudy.details');

    Route::group(['prefix' => 'blogs'], function () {
        Route::get('/', [BlogController::class, 'index'])->name('blogs');
        Route::get('/blog-details/{blog_slug}', [BlogController::class, 'blogDetails'])->name('blog.details');
        Route::post('/blog-comment', [BlogCommentController::class, 'blogComment'])->name('user.blog.comment')->middleware(['isDemo']);
    });

    Route::group(['prefix' => 'about'], function () {
        Route::get('/', [AboutController::class, 'index'])->name('about');
    });

    Route::group(['prefix' => 'contact'], function () {
        Route::get('/', [ContactController::class, 'index'])->name('contact');
        Route::post('store', [ContactController::class, 'contactStore'])->name('contact.store');

    });

    Route::group(['prefix' => 'career'], function () {
        Route::get('/', [CareerController::class, 'index'])->name('career');
        Route::get('/career-details/{career_slug}', [CareerController::class, 'careerDetails'])->name('career.details');
    });

    Route::group(['prefix' => 'services'], function () {
        Route::get('/', [ServiceController::class, 'index'])->name('services');
        Route::get('/service-details/{service_slug}', [ServiceController::class, 'serviceDetails'])->name('service.details');
    });

    Route::group(['prefix' => 'terms-conditions'], function () {
        Route::get('/', [TermsConditionController::class, 'index'])->name('terms-conditions');
    });

    Route::group(['prefix' => 'refund-policy'], function () {
        Route::get('/', [RefundPolicyController::class, 'index'])->name('refund-policy');
    });

    Route::group(['prefix' => 'privacy-policy'], function () {
        Route::get('/', [PrivacyPolicyController::class, 'index'])->name('privacy-policy');
    });



});

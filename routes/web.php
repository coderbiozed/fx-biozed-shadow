<?php

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

Route::get('/', [App\Http\Controllers\SiteController::class, 'index'])->name('home');

Route::get('/broker-reviews', [App\Http\Controllers\SiteController::class, 'brokerReviews'])->name('Broker-Review');

Route::get('/broker-review/{slug}', [App\Http\Controllers\SiteController::class, 'brokerReview'])->name('broker.review');

Route::get('/asian_broker-review', [App\Http\Controllers\SiteController::class, 'asianBroker'])->name('asianBroker.review');

Route::get('/australian_broker-review', [App\Http\Controllers\SiteController::class, 'australianBroker'])->name('australianBroker.review');

Route::get('/african_broker-review', [App\Http\Controllers\SiteController::class, 'africanBroker'])->name('africanBroker.review');

Route::get('/canadian_broker-review', [App\Http\Controllers\SiteController::class, 'canadianBroker'])->name('canadianBroker.review');

Route::get('/europian_broker-review', [App\Http\Controllers\SiteController::class, 'europianBroker'])->name('europianBroker.review');

Route::get('/middle_east_broker-review', [App\Http\Controllers\SiteController::class, 'middleEastBroker'])->name('middleEastBroker.review');

Route::get('/us_broker-review', [App\Http\Controllers\SiteController::class, 'usBroker'])->name('usBroker.review');

Route::get('/uk_broker-review', [App\Http\Controllers\SiteController::class, 'ukBroker'])->name('ukBroker.review');

Route::get('/blog', [App\Http\Controllers\SiteController::class, 'allBlogs'])->name('all.blog');

Route::get('/blog/{slug}', [App\Http\Controllers\SiteController::class, 'blogDetails'])->name('blog.details');

Route::get('/deposit_bonuses', [App\Http\Controllers\SiteController::class, 'depositBonuses'])->name('depositBonuses');

Route::get('/deposit_bonuses_details/{id}', [App\Http\Controllers\SiteController::class, 'depositBonusesDetails'])->name('depositBonusesDetails');

Route::get('/welcome_bonuses', [App\Http\Controllers\SiteController::class, 'welcomeBonuses'])->name('welcomeBonuses');

Route::get('/welcome_bonuses_details/{id}', [App\Http\Controllers\SiteController::class, 'welcomeBonusesDetails'])->name('welcomeBonusesDetails');

Route::get('/demo_contest', [App\Http\Controllers\SiteController::class, 'demoContest'])->name('demoContest');

Route::get('/demo_contest_details/{id}', [App\Http\Controllers\SiteController::class, 'demoContestDetails'])->name('demoContestDetails');

Route::get('/live_contest_details/{id}', [App\Http\Controllers\SiteController::class, 'liveContestDetails'])->name('liveContestDeatils');

Route::get('/live_contest', [App\Http\Controllers\SiteController::class, 'liveContest'])->name('liveContest');

Route::get('/about-us', [App\Http\Controllers\SiteController::class, 'about'])->name('About');

Route::get('/contact-us', [App\Http\Controllers\SiteController::class, 'contact'])->name('Contact');

Route::post('/send-message', [App\Http\Controllers\SiteController::class, 'sendEmail'])->name('contact.send');

Route::get('/compare', [App\Http\Controllers\SiteController::class, 'compare'])->name('compare');

Route::get('/terms-&-conditions', [App\Http\Controllers\SiteController::class, 'termsConditions'])->name('Terms-&-Conditions');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('blogs', App\Http\Controllers\BlogController::class)->middleware('auth');

Route::resource('seos', App\Http\Controllers\SeoController::class)->middleware('auth');

Route::resource('compares', App\Http\Controllers\CompareController::class)->middleware('auth');

Route::resource('brokerReviews', App\Http\Controllers\BrokerReviewController::class)->middleware('auth');

Route::resource('userReviews', App\Http\Controllers\UserReviewController::class);

Route::resource('faqs', App\Http\Controllers\FaqController::class)->middleware('auth');

Route::resource('banners', App\Http\Controllers\BannerController::class)->middleware('auth');

Route::resource('subscribers', App\Http\Controllers\SubscriberController::class);

Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users')->middleware('guest');

Route::delete('/user-delete/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');

Route::resource('analytics', App\Http\Controllers\AnalyticsController::class);

Route::resource('traders', App\Http\Controllers\TradersController::class);

Route::resource('bonuses', App\Http\Controllers\BonusController::class);

Route::resource('contests', App\Http\Controllers\ContestsController::class);

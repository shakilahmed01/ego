<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/clear', function () {
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
});

// User Support Ticket
Route::controller('TicketController')->prefix('ticket')->name('ticket.')->group(function () {
    Route::get('/', 'supportTicket')->name('index');
    Route::get('new', 'openSupportTicket')->name('open');
    Route::post('create', 'storeSupportTicket')->name('store');
    Route::get('view/{ticket}', 'viewTicket')->name('view');
    Route::post('reply/{ticket}', 'replyTicket')->name('reply');
    Route::post('close/{ticket}', 'closeTicket')->name('close');
    Route::get('download/{ticket}', 'ticketDownload')->name('download');
});

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::controller('SiteController')->group(function () {
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact', 'contactSubmit')->name('contact.submit');
    Route::get('/change/{lang?}', 'changeLanguage')->name('lang');

    Route::get('cookie-policy', 'cookiePolicy')->name('cookie.policy');

    Route::get('/cookie/accept', 'cookieAccept')->name('cookie.accept');

    Route::get('blog/{slug}/{id}', 'blogDetails')->name('blog.details');

    Route::get('policy/{slug}/{id}', 'policyPages')->name('policy.pages');

    Route::get('placeholder-image/{size}', 'placeholderImage')->name('placeholder.image');
    Route::get('/', 'egoIndex')->name('ego.index');
    Route::get('toric/lense', 'toricLense')->name('ego.pages.toric.lense');

    Route::get('collection/lense', 'collection')->name('ego.pages.collection.lense');

    Route::get('color/lense', 'color')->name('ego.pages.color.lense');
    Route::get('duration/lense', 'duration')->name('ego.pages.duration.lense');

    Route::get('about/lense', 'about')->name('ego.pages.about.lense');




    Route::get('accessories', 'accessories')->name('ego.pages.accessories');
    Route::get('shop/instagram', 'shopInstagram')->name('ego.pages.shop.instagram');


    Route::get('all/lenses', 'allLenses')->name('ego.pages.all.lenses');
    //auth
    Route::get('site/user/login', 'egoLogin')->name('ego.login');
    Route::get('site/user/register', 'egoRegister')->name('ego.register');
    Route::get('test/user', 'testUser')->name('ego.user.test');
});



Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'hi', 'ru', 'zh'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('set_language');

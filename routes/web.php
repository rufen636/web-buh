<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SendFormController;
use App\Http\Controllers\SiteMapController;
use App\Http\Resources\Admin\ReviewResource;
use App\Models\Review;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    $cookieCountry = request()->cookie('country');
    $country = $cookieCountry ?? 'by'; // если куки нет, ставим Беларусь

    $prices = [
        'by' => ['first'=>300,'opening_business' => 1250, 'legal_support' => 150,'before_start'=>150,'buh'=>300,'consultations'=> 100,'thousand'=>1000],
        'ru' => ['first'=>10000,'opening_business' => 35000, 'legal_support' => 5000,'before_start'=>5000,'buh'=>10000,'consultations'=>3000,'thousand'=>24500],
    ];
    $reviews = ReviewResource::collection(Review::where('published',1)->get())->resolve();
    return Inertia::render('Welcome', [
        'country' => $country,
        'hasCountryCookie' => (bool)$cookieCountry,
        'prices' => $prices[$country],
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'reviews' => $reviews,
    ]);
});
Route::get('/payment',function (){
    $cookieCountry = request()->cookie('country');
    $country = $cookieCountry ?? 'by';
    return Inertia::render('Payment',[
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'country' => $country,
    ]);

});
Route::get('/contacts',function (){
    $cookieCountry = request()->cookie('country');
    $country = $cookieCountry ?? 'by';
    return Inertia::render('Contacts',[
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'country' => $country,
    ]);

});
Route::get('/discounts',function (){
    $cookieCountry = request()->cookie('country');
    $country = $cookieCountry ?? 'by';
    return Inertia::render('Discount',[
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'country' => $country,
    ]);

});

Route::post('/set-country', function (Request $request) {
    $country = $request->input('country', 'by');

    return response()->json(['ok' => true])
        ->cookie('country', $country, 60 * 24 * 30);
})->name('set-country');


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/sitemap.xml',[SiteMapController::class,'index']);

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';

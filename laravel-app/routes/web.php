<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Uses a DRY routing pattern with dynamic page handling.
| The PageController validates slugs against a whitelist.
|
*/

// Home page
Route::get('/', [PageController::class, 'index'])->name('home');

// Main Categories
Route::get('/why-nordic', [PageController::class, 'show'])
    ->defaults('page', 'why-nordic')
    ->name('why-nordic');

Route::get('/support', [PageController::class, 'show'])
    ->defaults('page', 'support')
    ->name('support');

Route::get('/heating', [PageController::class, 'show'])
    ->defaults('page', 'heating')
    ->name('heating');

Route::get('/cooling', [PageController::class, 'show'])
    ->defaults('page', 'cooling')
    ->name('cooling');

Route::get('/air-quality', [PageController::class, 'show'])
    ->defaults('page', 'air-quality')
    ->name('air-quality');

Route::get('/thermostats', [PageController::class, 'show'])
    ->defaults('page', 'thermostats')
    ->name('thermostats');

// Product Specific Pages (Heating)
Route::get('/heating/furnaces', [PageController::class, 'show'])
    ->defaults('page', 'furnaces')
    ->name('furnaces');

Route::get('/heating/heat-pumps', [PageController::class, 'show'])
    ->defaults('page', 'heating')
    ->name('heat-pumps');

// Product Specific Pages (Cooling)
Route::get('/cooling/air-conditioners', [PageController::class, 'show'])
    ->defaults('page', 'air-conditioners')
    ->name('air-conditioners');

Route::get('/cooling/ductless', [PageController::class, 'show'])
    ->defaults('page', 'ductless-systems')
    ->name('ductless');

// Other Products
Route::get('/packaged-systems', [PageController::class, 'show'])
    ->defaults('page', 'packaged-systems')
    ->name('packaged-systems');

// Catch-all for other products if needed (keep as fallback)
Route::get('/products/{page}', [PageController::class, 'show'])
    ->where('page', '[a-z\-]+')
    ->name('product.show');
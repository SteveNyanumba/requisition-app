<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Category;
use App\Models\Type;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified', 'admin'])->group(function (){
    Route::get('/dashboard', function(){
        return Inertia::render('Dashboard', [
            'Categories'=>Category::all(),
            'Types'=>Type::all(),

        ]);
    })->name('dashboard');

    Route::resource('item_categories', 'App\Http\Controllers\CategoriesController');
    Route::resource('types', 'App\Http\Controllers\TypesController');
    Route::resource('items', 'App\Http\Controllers\ItemsController');
});

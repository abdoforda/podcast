<?php

use App\Http\Controllers\AdminTowController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use TCG\Voyager\Facades\Voyager;

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
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    return "done";
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('/change-language/{lang}', function ($lang) {
    $availableLanguages = Config::get('app.available_locales');

    if (array_key_exists($lang, $availableLanguages)) {
        Session::put('locale', $lang);
        App::setLocale($lang);
    }

    return redirect()->back();
})->name('change.language');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['prefix' => 'adminsite'], function () {
    Route::get("/contentPages", [AdminTowController::class, "contentPages"])->name("adminsite.contentPages");
    Route::get('contentPages/{id}', [AdminTowController::class, 'contentPagesShow'])->name('adminsite.contentPagesShow');
    Route::post('translateUpdate', [AdminTowController::class, 'translateUpdate'])->name('admin2.translateUpdate');
    Route::post('translateUpdateOne', [AdminTowController::class, 'translateUpdateOne'])->name('admin2.translateUpdateOne');
});

Route::get('blog/{slug}', [SiteController::class, 'blog_show'])->name('blog_show');
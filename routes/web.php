<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ServiceController;


if (!function_exists('parseLocale')) {
    function parseLocale()
    {
        $locale = request()->segment(1);

        if (in_array($locale, ['js', 'css'])) {
            return $locale;
        }

        if (array_key_exists($locale, config('languages'))) {
            app()->setLocale($locale);

            return $locale;
        }

        app()->setLocale('en'); // this default locale

        return '/';
    }
}






Route::get('/create-service', [ServiceController::class, 'createService'])->name('create.service');
Route::post('/store-service', [ServiceController::class, 'storeService'])->name('store.service');
Route::get('/manage-service', [ServiceController::class, 'manageService'])->name('manage.service');
Route::get('/edit-service/{id}', [ServiceController::class, 'editService'])->name('edit.service');
Route::post('/update-service/{id}', [ServiceController::class, 'updateService'])->name('update.service');
Route::get('/status-service/{id}', [ServiceController::class, 'changeStatus'])->name('status.service');
Route::post('/delete-service/{id}', [ServiceController::class, 'deleteService'])->name('delete.service');



Route::prefix(parseLocale())->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::middleware('auth')->group(function (){

        Route::get('/dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');
        Route::get('/dashboard-two', [CustomAuthController::class, 'userDashboard'])->name('dashboard.two');
        Route::post('/logout', [CustomAuthController::class, 'logout'])->name('logout');

    });

    Route::middleware('guest')->group(function () {

        Route::get('/registration', [CustomAuthController::class, 'registration'])->name('regis');
        Route::get('/login', [CustomAuthController::class, 'login'])->name('login');

        Route::post('/registration-submit', [CustomAuthController::class, 'registrationSubmit'])->name('registration.submit');
        Route::post('/login-submit', [CustomAuthController::class, 'loginSubmit'])->name('login.submit');

    });
});

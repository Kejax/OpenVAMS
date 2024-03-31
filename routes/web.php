<?php

use App\Events\TestEvent;
use App\Http\Controllers\Admin\ApplicationSettingsController;
use App\Http\Controllers\CompanyRouteController;
use App\Models\CompanyRoute;
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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/button/clicked', function () {
    TestEvent::dispatch("Hello World");
    return response()->json(['success' => true]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/booking', function () {
        return view('booking');
    })->name('booking');

    Route::get('/flights', function () {
        return view('flights');
    })->name('flights');

    Route::get('/map', function () {
        return view('map');
    })->name('map');

    Route::group([
        'prefix' => 'routes'
    ], function() {
        Route::get('/', [CompanyRouteController::class, 'index'])->name('routes.index');
        Route::get('/create', [CompanyRouteController::class, 'create'])->name('routes.create');
    });

});

Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth:sanctum', 'verified', 'can:admin.access']
], function() {
    Route::get('settings', [ApplicationSettingsController::class, 'index'])
    ->name('admin.settings');
});

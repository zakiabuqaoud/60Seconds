<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\messagesController;
use App\Http\Controllers\featuresController;
use App\Http\Controllers\clientsController;
use App\Http\Controllers\AdminPages\DashboardController;
use Illuminate\Support\Facades\Auth;




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
/*
Route::get('/', function () {
    return view('60-Seconds.index');
});
*/
//home
Route::get('/', [homeController::class, 'index'])->name('main');
Route::post('/store', [messagesController::class, "store"])->name('messages.store');


Route::middleware(['auth'])->group(function () {

    //Admin
    //dashboard
    Route::get('/dashboardAdmin', [DashboardController::class, 'index'])->name('dashboard');
    //features
    Route::get('features/index', [featuresController::class, 'index'])->name('features.index');
    Route::get('features/create', [featuresController::class, 'create'])->name('features.create');
    Route::post('features/store', [featuresController::class, 'store'])->name('features.store');
    Route::get('features/edit/{id}', [featuresController::class, 'edit'])->name('features.edit');
    Route::put('features/update/{id}', [featuresController::class, 'update'])->name('features.update');
    Route::delete('features/delete/{id}', [featuresController::class, 'destroy'])->name('features.delete');
    //clients
    Route::get('clients/index', [clientsController::class, 'index'])->name('clients.index');
    Route::get('clients/create', [clientsController::class, 'create'])->name('clients.create');
    Route::post('clients/store', [clientsController::class, 'store'])->name('clients.store');
    Route::get('clients/edit{id}', [clientsController::class, 'edit'])->name('clients.edit');
    Route::put('clients/update{id}', [clientsController::class, 'update'])->name('clients.update');
    Route::delete('clients/delete/{id}', [clientsController::class, 'delete'])->name('clients.delete');
    //Message
    Route::get('/messages/index', [messagesController::class, "index"])->name('messages.index');
    Route::get('/messages/create', [messagesController::class, "create"])->name('messages.create');
    Route::get('/messages/edit/{id}', [messagesController::class, "edit"])->name('messages.edit');
    Route::put('/messages/update/{id}', [messagesController::class, "update"])->name('messages.update');
    Route::delete('messages/delete/{id}', [messagesController::class, 'delete'])->name('messages.delete');
});

//login
Route::get("/login", function () {
    return view('auth.login');
})->name('login');
//register
Route::get("/register", function () {
    return view('auth.register');
})->name('register');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

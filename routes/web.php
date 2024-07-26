<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\NewsController;
use App\Livewire\Dashboard;
use App\Livewire\Login;
use App\Livewire\Logout;
use App\Livewire\News\News;
use App\Livewire\News\NewsAdd;
use App\Livewire\News\NewsEdit;
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
    return redirect('dashboard');
});

Route::get('/login', [AuthenticateController::class, 'loginView'])->name('login');
Route::post('/login', [AuthenticateController::class, 'login'])->name('processLogin');
Route::post('/logout', [AuthenticateController::class, 'logout']);

Route::group(['middleware'=>'auth'], function(){
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::prefix('news')->group(function() {
        Route::get('/', News::class)->name('news');
        Route::get('/add', NewsAdd::class)->name('news.add');
        Route::get('/edit/{id}', NewsEdit::class)->name('news.edit');
    });
});

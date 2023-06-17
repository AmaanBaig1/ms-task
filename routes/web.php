<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\auth\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthenticUser;
use App\Http\Middleware\UnauthenticUser;

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
    return redirect('/login');
});

Route::middleware(['UnauthenticUser'])->group(function () {
    Route::get('/login', [AuthController::class, 'loginView'])->name('login');
    Route::post('/login', [AuthController::class, 'loginProcess'])->name('login.process');
    Route::post('/register', [AuthController::class, 'registerProcess'])->name('register.process');
});
Route::middleware(['AuthenticUser'])->group(function () {
    Route::get('/jobs', [JobController::class, 'Jobs'])->name('jobs');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/all-jobs', [JobController::class, 'allJobs'])->name('all.jobs');
});




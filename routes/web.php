<?php

use App\Http\Controllers\DashboardController;
use App\Models\Question;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::middleware('auth')->get('/teste', function () {
//     $user = User::with('questions')->find(1);
//     dd($user);
// });

/*
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
*/

Route::middleware('auth')->prefix('/dashboard')->controller(DashboardController::class)->group(function(){
    Route::get('/', 'indexDashboard')->name('dashboard.index');
    Route::get('/cadastrar', 'registerQuestion')->name('dashboard.registerQuestion');
    Route::get('/atualizar/{id}', 'updateQuestion')->name('dashboard.updateQuestion');

    // Rota para testes
    Route::get('/teste', 'teste');
});



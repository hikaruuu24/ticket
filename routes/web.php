<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

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
    $data['page_title'] = "Login";
    return view('auth.login', $data);
})->name('user.login');

Route::middleware('auth:web')->group(function () {

    // Master Data
     Route::get('master-data', function () {
        $data['page_title'] = 'Master Data';
        $data['breadcumb'] = 'Master Data';
        return view('master-data.index', $data);
    })->name('master-data.index');

    // Departement
    Route::resource('departements', DepartementController::class);
    Route::resource('tickets', TicketController::class);
    Route::get('update-ticket/{id}', [TicketController::class, 'updateTicket'])->name('tickets.update-ticket');
    Route::post('/tickets/{id}/upload', [TicketController::class, 'uploadDoc'])->name('tickets.upload-doc');
    Route::delete('/tickets/{id}/delete-doc/{doc}', [TicketController::class, 'deleteDoc'])->name('tickets.delete-doc');
    Route::patch('/tickets/{id}/update-status', [TicketController::class, 'updateStatus'])->name('tickets.update-status');
    // Users
    Route::patch('change-password', [UserController::class, 'changePassword'])->name('users.change-password');
    Route::resource('users', UserController::class);
    // History Log
    

});
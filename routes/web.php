<?php

use App\Http\Controllers\Apps\PermissionManagementController;
use App\Http\Controllers\Apps\RoleManagementController;
use App\Http\Controllers\Apps\UserManagementController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToolController;

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

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/', [DashboardController::class, 'index']);

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::name('user-management.')->group(function () {
        Route::resource('/user-management/users', UserManagementController::class);
        Route::resource('/user-management/roles', RoleManagementController::class);
        Route::resource('/user-management/permissions', PermissionManagementController::class);
    });

});

Route::get('/error', function () {
    abort(500);
});

Route::get('/auth/redirect/{provider}', [SocialiteController::class, 'redirect']);

require __DIR__ . '/auth.php';

Route::get('/pruning-request', [ToolController::class, 'form']);
Route::post('/pruning-request', [ToolController::class, 'store']);
Route::get('/list', [ToolController::class, 'show']);
Route::get('/tools', [ToolController::class, 'detail']);
Route::get('/tools/add', [ToolController::class, 'add']);
Route::post('/tools/store', [ToolController::class, 'save']);
Route::get('/zipcode', [ToolController::class, 'code']);
Route::get('/zipcode/add', [ToolController::class, 'addcode']);
Route::post('/zipcode/store', [ToolController::class, 'storecode']);
Route::get('/zipcode/{id}/edit', [ToolController::class, 'edit']);
Route::post('/zipcode/{id}/update', [ToolController::class, 'update']);
Route::get('/zipcode/{id}/delete', [ToolController::class, 'destroy']);
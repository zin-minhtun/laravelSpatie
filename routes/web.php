<?php

use App\Http\Controllers\PostController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
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
    return view('welcome');
});

Auth::routes();

/* 
| Route after login user.
*/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resource('post', PostController::class);
});

Route::get('/create/role', function () {
    // Role::create(['name' => 'tester']);
});

Route::get('/create/permission', function () {
    // Permission::create(['name' => 'create post']);
});

Route::get('/give/permission', function () {
    // $role = Role::find(1);
    // $role->givePermissionTo(2);
    // $auth_user_id = auth()->user()->id;
    // $auth_user = User::find($auth_user_id);
    // $auth_user->revokePermissionTo(2);
});

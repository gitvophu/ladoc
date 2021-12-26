<?php

use App\Http\Controllers\LabController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;

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
Route::get('/create-user', function () {
    $user = new App\Models\User();
    $user->password = Hash::make('123123');
    $user->email = 'phuvn@fireapps.vn';
    $user->name = 'Phu Vo';
    $user->save();
    dd('ok');
});
Route::get('/lab', function () {
    $key = 'name';
    Cache::set($key, 'phuvn');
    $name = Cache::get($key);
    dd($name);
});

Route::get('/get-my-name/{shopId}', [LabController::class, 'getMyName']);
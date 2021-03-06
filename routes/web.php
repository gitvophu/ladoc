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

Route::get('/', [LabController::class, 'welcome']);
Route::get('/lab', [LabController::class, 'lab']);
Route::get('/test-sentry', [LabController::class, 'testSentry']);
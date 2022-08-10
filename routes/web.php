<?php

use Illuminate\Support\Facades\Route;
use Spatie\GoogleCalendar\Event;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GCalendar;

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

Route::get('/',[GCalendar::class, 'show']);
Route::get('/cal', function () {
    return dd(Event::get());
});

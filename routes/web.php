<?php

use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\TestController;
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
    // return 'hello';
    return view('welcome');
});

Route::get('table', fn () => view('table'));


/* Route::get('hello/{name}/{age?}', function ($name, $age = 0) {
    return "<h1>Hello $name Your Age  = $age</h1>";
}); */

// Route::get('hello/{name}/{age?}', [App\Http\Controllers\HelloController::class, 'hello']);

Route::get('hello/{name}/{age?}', [HelloController::class, 'hello']);

Route::get('test/table', [TestController::class, 'table']);

Route::get('test/hello/{name}/{age}/{job?}', [TestController::class, 'hello']);


Route::get("calculator/sum/{x}/{y}", [CalculatorController::class, 'sum']);
Route::get("calculator/sub/{x}/{y}", [CalculatorController::class, 'sub']);
Route::get("calculator/multi/{x}/{y}", [CalculatorController::class, 'multi']);
Route::get("calculator/div/{x}/{y}", [CalculatorController::class, 'div']);


// Route::get("calculator/div/{x}/{y}", "CalculatorController@div);

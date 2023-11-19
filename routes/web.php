<?php

use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\lec5Controller;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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


//Route::get('lec4', [TestController::class, 'lec4']);
// Route::post('lec4', [TestController::class, 'lec4']);

// Route::match(['get', 'post'], 'lec4', [TestController::class, 'lec4']);

Route::any('lec4', [TestController::class, 'lec4']);

// Route::view('lec4/table', 'table');


Route::get('product/{id}/{name}', function (Request $request) {
    $id = $request->id;
    $name = $request->name;
    echo "<h3>ID : $id</h3>";
    echo "<h3>Name : $name</h3>";
})
    // ->where('id', '[0-9]+')
    ->whereIn('name', ['cat', 'car']);
// ->where('name', '[A-z]+');

/* Route::get('lec4/{data}', fn ($data) => $data)
    // ->whereNumber('data');+
    // ->whereAlphaNumeric('data');
    ->whereAlpha('data'); */


/* Route::get('users/index', fn () => 'users index')->name('users.index');
Route::get('users/create', fn () => 'users create')->name('users.create');
Route::get('users/show/{id}', fn ($id) => "users show $id")->name('users.show');
Route::get('users/edit/{id}', fn ($id) => "Users Edit $id")->name('users.edit');
Route::get('users/delete/{id}', fn ($id) => "Users Delete $id")->name("users.delete"); */

// Route::prefix("users")->as('users.')->group(function () {

Route::prefix("users")->name('users.')->group(function () {
    Route::get('index', fn () => 'users index')->name('index');
    Route::get('create', fn () => 'users create')->name('create');
    Route::get('show/{id}', fn ($id) => "users show $id")->name('show');
    Route::get('edit/{id}', fn ($id) => "Users Edit $id")->name('edit');
    Route::get('delete/{id}', fn ($id) => "Users Delete $id")->name("delete");
});

Route::view('lec4/new', 'lec4');
Route::get('lec5/new', [lec5Controller::class, 'lec5_blade']);
Route::get('lec5/com', [lec5Controller::class, 'com']);
Route::get('lec5/table', [lec5Controller::class, 'lec5_table']);
Route::get('sales', [SalesController::class, 'index'])->name('sales.index');

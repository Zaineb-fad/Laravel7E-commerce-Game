<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TextSearchController;
use App\Http\Controllers\XboxController;
use App\Http\Controllers\WindowsController;
use App\Http\Controllers\StrategyController;
use App\Http\Controllers\SimulationController;
use App\Http\Controllers\RPGController;
use App\Http\Controllers\RacingController;
use App\Http\Controllers\MMOController;
use App\Http\Controllers\MacController;
use App\Http\Controllers\LinuxController;
use App\Http\Controllers\HackController;
use App\Http\Controllers\GamepointsController;
use App\Http\Controllers\GlobalController;
use App\Http\Controllers\FPSController;
use App\Http\Controllers\EuropeController;
use App\Http\Controllers\DLCController;
use App\Http\Controllers\AdventureController;
use App\Http\Controllers\ActionController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\TunisController;
use App\Http\Controllers\FranceController;
use App\Http\Controllers\CanadaController;

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

Route::get('/products', [TextSearchController::class, 'index'])->name('products');

Route::post('/create-product', [TextSearchController::class, 'fullTextSearch'])->name('createProduct');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/steam-darksiders-warmastered-edition-steam-key-global', function () {
    return view('darksiders');
});
Route::get('/killingfloor', function () {
    return view('killingfloor');
});
Route::get('/returncastle', function () {
    return view('returncastle');
});
Route::get('/gothic', function () {
    return view('gothic');
});
Route::get('/fallout', function () {
    return view('fallout');
});
Route::get('/elderscroll', function () {
    return view('elderscroll');
});
Route::get('/dirtyrally', function () {
    return view('dirtyrally');
});
Route::get('/spilit', function () {
    return view('spilit');
});
Route::get('/darkisider', function () {
    return view('darkisider');
});


Route::resource('game', GameController::class);

Route::resource('xbox', XboxController::class);
Route::resource('windows', WindowsController::class);
Route::resource('stream', StreamController::class);
Route::resource('strategy', StrategyController::class);
Route::resource('simulation', SimulationController::class);
Route::resource('rpg', RPGController::class);
Route::resource('racing', RacingController::class);
Route::resource('mmo', MMOController::class);
Route::resource('mac', MacController::class);
Route::resource('linux', LinuxController::class);
Route::resource('hack', HackController::class);
Route::resource('gamepoints', GamepointsController::class);
Route::resource('global', GlobalController::class);
Route::resource('fps', FPSController::class);
Route::resource('europe', EuropeController::class);
Route::resource('dlc', DLCController::class);
Route::resource('adventure', AdventureController::class);
Route::resource('action', ActionController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

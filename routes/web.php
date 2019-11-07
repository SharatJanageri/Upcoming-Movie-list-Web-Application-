<?php
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\ActorController;

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

Route::get('/home', 'HomeController@index');

//Creating Route for the MovieController 
Route::resource('movie','MovieController');
Route::resource('actor','ActorController');
//
Route:: post('actor/store','ActorController@store')->
name('ajax.postdata');






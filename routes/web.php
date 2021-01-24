<?php

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

Route::get('landing', function (){

    return view('landing');


});

Route::get('about', function (){

    return view('about');


});

Route::get('/test/{id?}', function (){

    return 'work';


});
Route::get('/test2/{id}', function (){

    return 'work';


});


Route::group(['prefix'=>'user'],function (){

    Route::get('/',function()
    {


        return 'work!';

    });
Route::get('/show',function()
    {


        return 'work!';

    });
    Route::get('/edit',function()
    {


        return 'work!';

    });
    Route::get('/delete',function()
    {


        return 'work!';

    });

});

Route::get('/check',function (){

    return 'middleware';

})-> middleware('auth');


Route::namespace('Front')->group(function (){

    Route::get('users','UserController@showUsername');


});

Route::get('first','Front\FirstController@showNumber1')->middleware('auth');
Route::get('first2','Front\FirstController@showNumber2');
Route::get('first3','Front\FirstController@showNumber3');

Route::get('login',function (){

return 'must login';

})->name('login');

Route::resource('news','NewsController');


Route::get('new','NewsController@showKarimfawaz');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

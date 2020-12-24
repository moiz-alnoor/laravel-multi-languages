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



Route::get('/{lang}/{region}', function ($lang,$region) {
    if (!in_array($lang, ['en', 'ar']) ) {
        abort(400);
    }
elseif (!in_array($region, ['sa', 'ae'])) {
    abort(400);
}else

App::setlocale($lang);

   session(['region' => $region]);
    return view('welcome');


    //
});

Route::get('sa', function () {
    session(['region' => $region]);
    return redirect()->back();

});
Route::get('ea', function () {
    session(['region' => $region]);
    return redirect()->back();

});


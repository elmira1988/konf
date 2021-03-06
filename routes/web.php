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
});

Route::get('/math-21', function () {
    return view('welcome');
});

Route::get('/articles-21', function () {
    return view('articles');
});


Route::resource("articles","ArticleController");


Route::get('/child-22', function () {
    return view('child_22.welcome');
});

Route::get('/child-22/articles', function () {
    return view('child_22.articles');
});

Route::get('/child-22/result', function () {
    return view('child_22.result');
});

Route::get('/child-22/emails', function () {
    return view('child_22.emails');
});

Route::post('/child-22/push', [\App\Http\Controllers\ChildArticleController::class, 'push']);

Route::resource("child_articles","ChildArticleController");

<?php

use Faker\Generator as Faker; 
// use Intervention\Image\Image;

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
    return view('blog.index');
});

Route::get('/blog/show', function () {
    return view('blog.show');
});


Route::get('/images', function()
{
    $img = Image::make('foo.jpg')->resize(300, 200);

    return $img->response('jpg');
});

Route::get('/faker', function(Faker $faker) {
    return '<img src=" '. $faker->imageUrl($width = 300, $height=300, 'food', true, 'CATS') . '" />';
});
<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\Route;


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
    return View ('home', [
        'title' => 'home'
    ]);
});

Route::get('/about', function (){
    return View ('about', [
        'title' => 'about',
        'name' => 'Zoro',
        'email' => 'ZorotheLost@gmail.com',
        'picture' => 'img/zoro.png'


    ]);
});



Route::get('/blog', [PostController::class, 'index']);

Route::get('posts/{slug}', [PostController::class, 'show']);

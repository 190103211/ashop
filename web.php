<?php

use Illuminate\Support\Facades\Route;
use App\Models\Client;
use App\Http\Controllers\clientcontroller;
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

Route::get('/client/create',function(){
    DB::table('Post')->insert([
        'title' => 'Profile',
        'body' => 'Information about me'
    ]);
});


Route::get('/client',function(){
    $Clients = Post::find(1);//find(ID)
    return $Clients->title;
});


Route::get('/blog/index',[BlogController::class,'index']);

Route::get('/blog/create', function(){
    return view('blog.create');
}); 

Route::post('/blog/create',[BlogController::class,'store'])->name('add_client');


Route::get('client/{id}',[BlogController::class,'get_client']);
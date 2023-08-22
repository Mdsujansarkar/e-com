<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/', function () {
 $user = \App\Models\Post::all();

return $user->tags;
    return $profile = Profile::first()->user;
    // $user = User::first()->profiles;
    // $profile = Profile::first()->user;


});
Route::get('/office', function () {
    // $profile = Profile::first()->user;
    // $user = User::first()->profiles;
    // $profile = Profile::first()->user;
    $post = Post::find(2)->tags->attach(1);

    return(  $post);
});

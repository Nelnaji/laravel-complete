<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Barryvdh\Debugbar\Facades\Debugbar;

/*
GET = Request a resource
POST = Create a new resource
PUT = Update a resource (every single value in a single low)
PATCH = Modify a resource (only the value that has been modified)
DELETE = Delete a resource
OPTIONS = Ask the server which vers are allowed
*/

// GET
Route::get('blog', [PostController::class,'index']);
Route::get('blog/{id}', [PostController::class,'show']);

// POST
Route::get('blog/create', [PostController::class,'create']);
Route::post('blog', [PostController::class,'store']);

// PUT OR PATCH
Route::get('blog/edit/{id}', [PostController::class,'edit']);
Route::patch('blog/{id}', [PostController::class,'update']);

// DELETE
Route::delete('blog/{id}', [PostController::class,'destroy']);





// Route::resource('blog', PostController::class);

Route::get('/', HomeController::class);






// Multiple HTTP verbs
// Route::match(['GET','POST'], [PostController::class, 'index']);

// Route::any('blog', [PostController::class, 'index']);

// Return a view

// Route::view('blog', 'blog.index', ['name' => 'habibi']);




// Route for the invoke method


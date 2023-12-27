<?php

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// All Listing
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

//Single Listing
Route::get('/listings/{id}', function ($id) {
    $val = Listing::find($id);
    return view('listing', ['listing' => $val]);
});

// Route::get('/hello', function () {
//     return response('<h1>Hello World</h1>', 200);
// });

// // Wild Cards
// Route::get('/posts/{id}', function($id) {
//     // dd($id);
//     // ddd($id); // Dump, Die, Debug
//     return response('Post '.$id);
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request) {
//     return $request->name. ' '. $request->city;
// });
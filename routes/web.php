<?php

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

/*
    Anatomy:

    Route = generated class for rerouting; 

    :: = this is in exact analogy as using '.' in Java
    e.g. ClassName.function();

    '/' = not entirely explained here, but this is what
    is extended in the URL, kind of like if you go to another 
    page and it shows another directory like /mainpage ->
    /mainpage/1 or /mainpage -> /secondpage

    return = obviously exiting function with or without a data

    view() = includes parameters such as a String param which you
    can put the webpage it is being rerouted to(extensions do not
    need to be included, only the webpage name), and a List[] or Array{}
    that holds at least one value that gets passed as a global variable 
    to the rerouted webpage

    'listings' = webpage being rerouted to

    'heading' = think of it as a variable name, or in this whole context,
    an unique ID to a JSON Object or a Dictionary or a HashMap

    '=>' = a operator of sorts that acts like an assignment operator

    'Latest Listing' = think of this as the data being assigned to a variable,
    or in this whole context, this is the value that usually being associated
    to the unique ID its being paired to like a JSON object or Dictionary or HashMap

    Listing::getList() = 
        Listing -> Class Name; 
        :: -> operator to call a function;
        getList() -> function within the class

        in analogy to a more familiar language (Java, JS, Python)
        it is the same as "Listing.getList();"

*/

// get List
Route::get('/', function() {
    return view('listings',[
        'heading' => 'Latest Listings',
        'listings' => Listing::getList()
    ]);
});

// Single List
Route::get('/listings/{id}', function($id){
    return view('listing', [
        'item' => Listing::find($id)
    ]);
});

/**
 * Route::get('/listings/{id}', function($id){
    return view('listing', [
        'item' => Listing::find($id)
    ]);
    });

 */


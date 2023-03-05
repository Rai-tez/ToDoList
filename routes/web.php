<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ToDoListController;
use Illuminate\Support\Facades\Route;
use App\Models\ToDoList;

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
    e.g. ClassName.function() without the need to instantiate;

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

// landing page
Route::get('/', function() {return view('homepage');});


Route::get('/todolist', [ToDoListController::class, 'showList']);

// Navigation
Route::get('/login', function(){return view('login_page');});
Route::get('/register', function(){return view('register_page');});

// Login
Route::post('/login', [UserController::class, 'login']);

//register
Route::post('/register', [UserController::class, 'register']);

// Session expiry/termination
// Route::get('/todolist', [NavigationController::class, 'showList']);

// Single List
// Route::get('/listing/{id}', function($id){
//     return view('listing', [
//         'item' => Listing::find($id)
//     ]);
// });

/*
    ways to utilize routes:

    //Redirect:
    Route::get('/listings/{id}', function($id){
        return view('listing', [
            'item' => Listing::find($id)
        ]);
    });

    //Redirect:
    Route::get('/listings/{id}', function($id){
        return view('listing', [
            'item' => Listing::find($id)
        ]);
    });

    //Status Code Response:
    Route::get('/listings/{id}', function($id){
        return response(
            '<h1>Hello World</h1>',
            <<insert status code that corresponds with the response>>
        )
        -> header() // I have no idea what these are and the
        -> header() '->' operators means just accessing classes, similar to ::
    });

 */


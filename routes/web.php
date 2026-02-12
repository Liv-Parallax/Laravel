<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Idea;
use App\Http\Controllers\IdeaController;


Route::view('/', 'Welcome', [
    'title' => 'Hello',
    'person' => 'Liv',
    'tasks' => [
        'one',
        'two',
        'three'
    ]
]);
Route::view('/about', 'about', [
    'title' => 'About',
]);
Route::view('/contact', 'contact', [
    'title' => 'Contact',
]);
Route::view('/tasks', 'tasks', [
    'tasks' => [
        'one',
        'two',
        'three'
    ]
]);

// // Using get to display it using view, post to send/retrieve the information.
// Route::get('/ideas', function () {
//     // $ideas = DB::table('ideas')->get();  // Trad way to retrieve data from the mainpage.


//     // $ideas = Idea::find(1);  // This finds the ID 1 row. 
//     // $ideas = Idea::where('description', 'blah')->get();  // example of a selection of the database.
//     // dd($ideas);

//     $ideas = Idea::all();

//     return view('ideas.index', [
//         'ideas' => $ideas,
//     ]);
// });

Route::get('/ideas', [IdeaController::class, 'index']);
Route::get('/ideas/create', [IdeaController::class, 'create']);
Route::post('/ideas', [IdeaController::class, 'store']);
Route::get('/ideas/{idea}', [IdeaController::class, 'show']);
Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit']);
Route::patch('/ideas/{idea}', [IdeaController::class, 'update']);
Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy']);
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Idea;


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

// Using get to display it using view, post to send/retrieve the information.
Route::get('/ideas', function () {
    // $ideas = DB::table('ideas')->get();  // Trad way to retrieve data from the mainpage.


    // $ideas = Idea::find(1);  // This finds the ID 1 row. 
    // $ideas = Idea::where('description', 'blah')->get();  // example of a selection of the database.
    // dd($ideas);

    $ideas = Idea::all();

    return view('ideas.index', [
        'ideas' => $ideas,
    ]);
});

// show
Route::get('/ideas/{idea}', function (Idea $idea) {
    return view('ideas.show', [
        'idea' => $idea,
    ]);
});
// edit
Route::get('/ideas/{idea}/edit', function (Idea $idea) {
    return view('ideas.edit', [
        'idea' => $idea,
    ]);
});
// update
Route::patch('/ideas/{idea}', function (Idea $idea) {
    $idea->update([
        'description' => request('description'),
    ]);

    return redirect("/ideas/{$idea->id}");
});
// store
Route::post('/ideas', function () {
    // session()->push('ideas', $idea);

    $idea = Idea::create([
        'description' => request('description'),
    ]);

    return redirect('/ideas');
});
// destroy
Route::delete('/ideas/{idea}', function (Idea $idea) {
    $idea->delete();

    return redirect('/ideas');
});
<?php

use App\Http\Controllers\DoneListController;
use App\Http\Controllers\ProgressListController;
use App\Http\Controllers\ToDoController;
use App\Models\DoneList;
use App\Models\ProgressList;
use App\Models\ToDo;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $todoList = ToDo::all();
    $progressList = ProgressList::orderBy('created_at', 'asc')->get();
    $doneList = DoneList::orderBy('created_at', 'asc')->get();
    
    return view('board', compact('todoList','progressList','doneList'));
});

// ToDo Route
Route::post('/add-todo-task',[ToDoController::class,'create']);
Route::get('/delete-todo-task/{id}',[ToDoController::class,'delete']);

// Progress Route 
Route::get('/add-progress-task/{id}',[ProgressListController::class,'create']);
Route::get('/delete-progress-task/{id}',[ProgressListController::class,'delete']);

// Done Route 
Route::get('/add-done-task/{id}',[DoneListController::class,'create']);
Route::get('/delete-done-task/{id}',[DoneListController::class,'delete']);

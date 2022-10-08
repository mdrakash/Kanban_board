<?php

use App\Http\Controllers\Api\{DoneListController,ProgressListController,ToDoController};
use Illuminate\Support\Facades\Route;

// ToDo Route
Route::controller(ToDoController::class)->group(function () {
    Route::get('/todo','index');
    Route::post('/add-todo-task','create');
    Route::get('/delete-todo-task/{id}','delete');
});

// Progress Route 
Route::controller(ProgressListController::class)->group(function () {
    Route::get('/progress','index');
    Route::post('/add-progress-task/{id}','create');
    Route::get('/delete-progress-task/{id}','delete');
});

// Done Route 
Route::controller(DoneListController::class)->group(function () {
    Route::get('/done','index');
    Route::post('/add-done-task/{id}','create');
    Route::get('/delete-done-task/{id}','delete');
});
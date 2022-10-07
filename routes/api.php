<?php

use App\Http\Controllers\Api\DoneListController;
use App\Http\Controllers\Api\ProgressListController;
use App\Http\Controllers\Api\ToDoController;
use Illuminate\Support\Facades\Route;

// ToDo Route
Route::post('/add-todo-task',[ToDoController::class,'create']);
Route::get('/delete-todo-task/{id}',[ToDoController::class,'delete']);

// Progress Route 
Route::get('/add-progress-task/{id}',[ProgressListController::class,'create']);
Route::get('/delete-progress-task/{id}',[ProgressListController::class,'delete']);

// Done Route 
Route::get('/add-done-task/{id}',[DoneListController::class,'create']);
Route::get('/delete-done-task/{id}',[DoneListController::class,'delete']);


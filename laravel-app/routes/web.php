<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\Original_TaskController;

Route::get('/', function () {
    return view('welcome');
});

#Route::get('文字列 任意', list [どこのコントローラーか指定::class,"関数名"])->name("URLの名前?");
Route::prefix("task")->group(function (){
    Route::get("/", [TaskController::class,"index"])->name("task.index");
    Route::get("/create", [TaskController::class, "create"])->name("task.create"); // タスク作成フォーム
    Route::post("/", [TaskController::class, "store"])->name("task.store"); // 新規タスク保存
    Route::get("{id}/edit", [TaskController::class, "edit"])->name("task.edit"); // タスクの編集フォーム
    Route::put("{id}", [TaskController::class, "update"])->name("task.update"); // タスクの編集
    Route::delete('{id}',[TaskController::class, "destroy"])->name("task.delete"); // タスクの削除
});


Route::prefix("/o/task")->group(function (){
    Route::get('/', [Original_TaskController::class,"index"])->name("original");
    
});
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/ComicDetail/{id}',function($id){
    $comics = config('comics');

    if(!isset($comics[$id])){
        abort(404);
    }

    $comic = $comics[$id];
    return view('ComicDetail',compact('comic'));
})->name('comicDetail');
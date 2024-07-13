<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/question_1', function () {
    return view('pages.question_1');
})->name('question_1');

Route::get('/question_2', function () {
    return view('pages.question_2');
})->name('question_2');

Route::get('/question_3', function () {
    return view('pages.question_3');
})->name('question_3');

Route::get('/question_4', function () {
    return view('pages.question_4');
})->name('question_4');

Route::get('/question_5', function () {
    return view('pages.question_5');
})->name('question_5');

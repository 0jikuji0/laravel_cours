<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Project;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/project', function () {
    $model = new Project();
    $projects = $model->getAll();
    return view('projects.index', compact('projects'));
})->name('projects.index');

Route::get('/project/{id}', function (int $id) {
    $model = new Project();
    $project = $model->retrieve($id);

    return view('projects.show', compact('project'));
})->name('projects.show');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');
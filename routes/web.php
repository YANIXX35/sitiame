<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/a-propos', [PageController::class, 'about'])->name('about');

Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/services/{id}', [PageController::class, 'serviceShow'])->whereNumber('id')->name('services.show');

Route::get('/projets', [PageController::class, 'projects'])->name('projects');
Route::get('/projets/{id}', [PageController::class, 'projectShow'])->whereNumber('id')->name('projects.show');

Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/{id}', [PageController::class, 'blogShow'])->whereNumber('id')->name('blog.show');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::post('/newsletter', [ContactController::class, 'subscribeNewsletter'])->name('newsletter.subscribe');

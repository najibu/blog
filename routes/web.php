<?php

// App::singleton('App\Billing\Stripe', function () {
//     return new \App\Billing\Stripe(config('services.stripe.secret'));
// });
// App::instance('App\Billing\Stripe', $stripe);


$stripe = resolve('App\Billing\Stripe');



// Post
Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');

// Comments
Route::post('/posts/{post}/comments', 'CommentsController@store');

// Registration
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

// Sessions
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');



Route::get('about', function () {
    return view('about');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\JobController;

Route::get('/', function () {
    return view('/home', [
        'greetings' => 'Hello!'
    ]);
});

Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', 'index');
    Route::get('/jobs/create', 'create');
    Route::get('/jobs/{job}', 'show');
    Route::post('/jobs', 'store');
    Route::patch('/jobs/{job}', 'update');
    Route::delete('/jobs/{job}', 'delete');
    Route::get('/jobs/{job}/edit', 'edit');

});

// You can use this or the Route::controller()
/* 
    Route::resource('jobs', JobController::class, [ 
    'except' => ['edit']
    'only'
    ]);
 */

Route::view('/contact', 'contact');

/* 
Route::get('/contact', function () {
    return view('contact');
}); 
 */

//note: declare wildcard/'{}' below to the other routes without wildcard
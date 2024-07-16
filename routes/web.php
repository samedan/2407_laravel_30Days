<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;




Route::get('/', function () {
    // $jobs = Job::all();
    // dd($jobs[0]->salary);
    return view('home');

});

Route::get('/jobs', function () {
    // $jobs = Job::with("employer")->paginate(2);
    $jobs = Job::with("employer")->simplePaginate(2);
    $jobs = Job::with("employer")->cursorPaginate(2);
    // $jobs = Job::all();
    
    return view('jobs', [
        'jobs' => $jobs
        ],
    );
});

Route::get('/jobs/{id}', function ($id)  {
    $job = Job::find($id); 
    return view('job', ['job' => $job]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

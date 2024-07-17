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
    $jobs = Job::with("employer")->latest()->simplePaginate(2);
    // $jobs = Job::with("employer")->cursorPaginate(2);
    // $jobs = Job::all();
    
    return view('jobs.index', [
        'jobs' => $jobs
        ],
    );
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id)  {
    $job = Job::find($id); 
    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function() {
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1,
    ]);

    return redirect("/jobs");
});



Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

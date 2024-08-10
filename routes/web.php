<?php

use App\Events\VideoCreated;
use App\Jobs\opt;
use App\Jobs\ProcessPodcast;
use App\Mail\verifyEmail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/queue',function(){
    ProcessPodcast::dispatch();
});

Route::get('/otp',function(){
    opt::dispatch()->onQueue('high');
});

Route::get('/email',function(){
    $user=User::first();
    Mail::to('fateme.mahdavi.it@gmail.com')->send(new verifyEmail($user));
});


Route::get('/event',function(){
    VideoCreated::dispatch();
});

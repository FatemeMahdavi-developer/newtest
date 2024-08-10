<?php

namespace App\Listeners;

use App\Events\VideoCreated;
use App\Mail\verifyEmail;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(VideoCreated $event): void
    {
        $user=User::first();
        Mail::to('fateme.mahdavi.it@gmail.com')->send(new verifyEmail($user));
    }
}

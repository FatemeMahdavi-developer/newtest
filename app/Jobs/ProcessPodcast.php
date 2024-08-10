<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class ProcessPodcast implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        // $this->onQueue('high');
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::raw('plain text message', function ($message) {
            $message->to("fateme.mahdavi.it@gmail.com");
        });
    }
}

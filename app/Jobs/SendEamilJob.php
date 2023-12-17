<?php

namespace App\Jobs;

use App\Models\User;
use App\Mail\UsersMail;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SendEamilJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
      public $userMail;
    public function __construct($mail)
    {

        $this->userMail = $mail;

    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
            Mail::to($this->userMail)->send(new UsersMail());
    }
}

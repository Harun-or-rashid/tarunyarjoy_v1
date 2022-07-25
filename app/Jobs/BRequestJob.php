<?php

namespace App\Jobs;

use App\Mail\BloodRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class BRequestJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $volunteer;
    public $brequest;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($volunteer, $brequest)
    {
        $this->volunteer = $volunteer;
        $this->brequest = $brequest;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->volunteer->email)->send(new BloodRequest($this->brequest, $this->volunteer->id));
    }
}

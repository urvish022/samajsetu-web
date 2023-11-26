<?php

namespace App\Jobs;

use App\Traits\ImageTrait;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class UploadImageQueueJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    use ImageTrait;

    public $targetUrl, $fileName, $type;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($targetUrl,$fileName,$type)
    {
        $this->targetUrl = $targetUrl;
        $this->fileName = $fileName;
        $this->type = $type;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->uploadUsingCurl($this->targetUrl,$this->fileName, $this->type);
    }
}

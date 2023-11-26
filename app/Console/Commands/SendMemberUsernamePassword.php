<?php

namespace App\Console\Commands;

use App\Jobs\SendMemberEmailJob;
use App\Models\MemberDetail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class SendMemberUsernamePassword extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send-member';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email with username and password from MemberDetail model';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $memberDetails = MemberDetail::where('approval_flag',1)->where('mem_active_flag',1)->get();
        foreach ($memberDetails as $memberDetail) {
            // Dispatch the email job to the database queue connection
            dispatch((new SendMemberEmailJob($memberDetail))->onConnection('database'));
            exit;
        }

        $this->info('Emails dispatched successfully!');

    }
}

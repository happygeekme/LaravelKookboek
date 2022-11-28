<?php

namespace App\Console\Commands;

use App\Models\Mailinglist;
use Illuminate\Console\Command;
use App\Mail\Newsletter;
use Illuminate\Support\Facades\Mail;


class SendNewsletter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'newsletter:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a weekly newsletter to all mailinglist subscribers';

    /**
     * Execute the console command.
     *
     * @return int
     */

    public function handle()
    {
        var_dump('test');
        $emailAddresses = Mailinglist::all();

        foreach($emailAddresses as $email){
            Mail::to($email)->send(new Newsletter());
        }
    }
}

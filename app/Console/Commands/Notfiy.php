<?php

namespace App\Console\Commands;

use App\Mail\NotifyEmail;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class Notfiy extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send message to mails daily';

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
     * @return mixed
     */
    public function handle()
    {
        //
        //$userEmails = User::select('email')->get(); // select al user emails
        $emails = User::pluck('email')->toArry() ;
        $date =[ 'title'=> 'programing', 'body'=> 'php'];
        foreach($emails as $userEmail){
            //
            Mail::to($userEmail)->send(new NotifyEmail($date));
        }
    }
}

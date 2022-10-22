<?php

namespace App\Console\Commands;


use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Twilio\TwiML\Voice\Client;

class SendSMS extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send-sms';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send sms';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if (env('SMS_DRIVER') === 'twilio')
        {
            //use twilio
            $sid = 'ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX';
            $token = 'myToken';
            $client = new Client($sid, $token);

            $client->messages->create( '+351919657338',
            [
               'from'=> '+919567885',
                'body'=> 'hello',

            ]);
        }
        else
        {

            //log text message
            Log::info('sending message fail');
        }
    }
}

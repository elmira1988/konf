<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Support\Facades\Mail;

class SendMail
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        /*
        Mail::send('send_email', [], function ($message) use($email) {
            $message->to($email['email'])->subject('Международная конференция. Заявка успешно принята!');
        });*/


        $users_temp = explode(', ', $email['emails']);
        $users = [];
        foreach($users_temp as $key => $ut){
            $users[$key] = $ut;
        }

        /*
        Mail::send('send_email', [], function($message) use ($users)
        {
            $message->to($users)->subject('This is test e-mail');
        });
        var_dump( Mail:: failures());*/
    }
}

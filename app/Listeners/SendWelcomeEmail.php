<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
class SendWelcomeEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        $data = array('name' => $event->user->first_name.' '. $event->user->last_name,
                     'first_name' => $event->user->first_name,
                     'email' => $event->user->email
                     );

        Mail::send('emails.welcome', $data, function($message) use ($data)
        {
            $message->to($data['email'])
                    ->subject('Successful Registration');
                    $message->from('jcfdbdsystem@gmail.com');
        });




    }
}

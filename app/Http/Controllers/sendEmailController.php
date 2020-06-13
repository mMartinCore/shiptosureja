<?php

namespace App\Http\Controllers;

use App\Mail\message;
use Illuminate\Http\Request;
use Mail;
class sendEmailController extends Controller
{
    public function mail(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'min:2','max:50'],
            'email' => ['required', 'email', 'max:50'] ,
            'message_value'=> ['required', 'string', 'min:2','max:1000'],
        ]);

 try {

    $data = array(
        'name' => $request->name,
        'from' =>  $request->email,
        'messages' => $request->message_value
        );
        Mail::send('emails.mail', $data, function($message) use ($data)
        {
            $message->to('shiptosureja@gmail.com')
            ->subject('Message from Customer');
            $message->from($data['from']);
        });

 } catch (\Throwable $th) {
    return back()->with('error','Try again later !');
 }
        // Mail::send(new message($data), $data, function($message) use ($data)
        // {
        //     $message->to('shiptosureja@gmail.com')
        //     ->subject('Message from Customer');
        //     $message->from($data['from']);
        // });

       return back()->with('success','We will reply shortly.');
    }
}

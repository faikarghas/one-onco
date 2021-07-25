<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber_model;
use Newsletter;
use Carbon\Carbon;
use Mail; 

class NewsletterController extends Controller
{
    public function store(Request $request)
    {

        //dd($request->all());
        if ( ! Newsletter::isSubscribed($request->email) ) 
        {
            Newsletter::subscribe($request->email);
            Newsletter::getLastError();

            $subsCriber = new Subscriber_model;
            $subsCriber->email = $request->email;
            $subsCriber->save();

            Mail::send('v_emailSubscriber', ['emailSubscriber' => $request->email], function($message) use($request){
                $message->to($request->email);
                $message->subject('Notifikasi Berlangganan');
              });    

            //return redirect('/')->with('success', 'Thanks For Subscribe');
            return Newsletter::getLastError();

        }
        return redirect('/')->with('error', 'Sorry! You have already subscribed '); 
    }
}
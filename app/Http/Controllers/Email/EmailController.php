<?php

namespace App\Http\Controllers\Email;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Fascades\Mail;
use App\Mail\EnvoiMail;

class EmailController extends Controller
{
   
    public function index()
    {
        return view('visitors.index');
    }

    public function send(Request $request)
    {
        $this->validate($request, [
            'name'      =>   'required',
            'email'     =>   'required|email',
            'msg'       =>   'required'
        ]);

        $data = array(
            'name'       => $request->nom,
            'sujet'      => $request->sujet,
            'msg'        => $request->msg
        );

        Mail::to('contactnunyalab@gmail.com')->send(new EnvoiMail($data));  
        return back()->with('success', 'Merci de nous avoir contacté!');  
    }

}
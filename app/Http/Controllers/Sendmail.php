<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Sendmail extends Controller
{
    public function sendmail(Request $request)
    {
        Mail::to($request->user())->send(new WelcomeMail());
    }

    public function editName(Request $request)
    {
//        Mail::to($request->user())->send(new WelcomeMail());
    }
}

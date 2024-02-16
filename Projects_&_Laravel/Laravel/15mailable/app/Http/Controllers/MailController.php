<?php

namespace App\Http\Controllers;

use App\Mail\ExampleMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function mailMe()
    {
        // $user = Auth::user();
        // $user->email;
        Mail::to('contactbrianriveramartinez@gmail.com')->send(new ExampleMail('LO LOGRAMOS!!!!!!!'));
        return view('sent');
    }
}

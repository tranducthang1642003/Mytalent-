<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
class HomeController
{

    public function testEmail()
    {
        $name = 'mail';
        Mail::send('mail.sigup-email', compact('name'), function ($email) {
            $email->to('thangtdps37142@fpt.edu.vn')->subject('Mail test');
            $email->from('thangtdps37142@fpt.edu.vn','mail');
        });
    }
}

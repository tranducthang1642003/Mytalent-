<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login.sigin');
    }

        public function dangky()
        {
            return view('login.sigup');
        }

        public function đangnhap()
        {
            return view('login.sigin');
        }

        public function quenpass()
        {
            return view('login.resetpass');
        }

        public function uploadpass()
        {
            return view('login.newpass');
        }
        
    }


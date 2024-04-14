<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller; 
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers; // Import RegistersUsers trait from correct namespace
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth; // Import Auth facade
use App\Models\Verifytoken;
use App\Mail\WelcomeMail;


class RegisterController extends Controller
{
    use RegistersUsers; // Use RegistersUsers trait from correct namespace
    
    protected $redirectTo = '/verify-account';
    
    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    // RegisterController.php

    protected function create(Request $request)
    {   
        // Tạo người dùng mới
        $user = User::create([
            'email'=> $request->input('email'),
            'password'=> Hash::make($request->input('password')),
        ]);
        $validToken = substr(str_shuffle('0123456789'), 0, 2) . '2022';

        // Save the token to the user or verification table if needed
        $token = $validToken;
        $validToken = substr(str_shuffle('0123456789'), 0, 2) . '2022';
        $get_token = new Verifytoken();
        $get_token->token =  $validToken;
        $get_token->email =  $request->input('email');
        $get_token->save();

        // Gửi email chứa mã token cho người dùng
        $get_user_email = $request->input('email');
        Mail::to($request->input('email'))->send(new WelcomeMail($get_user_email, $validToken, ));

        return redirect()->route('verify.token')->with('email', $get_user_email);
    }


    // Thêm hàm xử lý nhập mã token vào RegisterController
    public function showVerifyTokenForm()
    {
        return view('auth.verify_token');
    }

    public function verifyToken(Request $request)
    {
        // Validate the token provided by the user
        $request->validate([
            'token' => ['required', 'string'], // Add any additional validation rules if needed
        ]);

        // Retrieve the token from the request
        $token = $request->input('token');
        $verifycoursetoken = Verifytoken::where('token', $token)->first();

        if ($verifycoursetoken) {
            $user = User::where('email', $verifycoursetoken->email)->first();
            $user->is_activated = 1;
            $user->save();
            $verifycoursetoken->delete();
            return redirect('login/register')->with('activated', 'Your account has been activated successfully');
        } else {
            return view('auth.verify_token')->with('error', 'Your OTP is invalid. Please check your email OTP first');
        }
    }

    public function showlogin(){
        return view('auth.register');
    }

    public function login1(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/verify-token'); // Chuyển hướng đến trang verify-token
        }
    
        // Authentication failed
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
    
}

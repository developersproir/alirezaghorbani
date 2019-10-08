<?php

namespace App\Http\Controllers\Frontend;

use App\Events\UserRegistered;
use App\Http\Controllers\Controller;
use App\Jobs\SendEmailNotify;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Usercontroller extends Controller
{
    public function login()
    {
        return view('frontend.users.login');
    }

    public function dologin(Request $request)
    {
        //$this->validate($request,[],[]);
        $remember = $request->has('remember');
        if (Auth::attempt(['bir_email' => $request->input('email'), 'password' => $request->input('password')], $remember)) {
            $user = Auth::user();
            $job = (new SendEmailNotify($user))->onQueue('emails');
            $job ->delay(Carbon::now()->addMinutes(10));
            dispatch($job);
            return redirect('/');
        }

        return redirect()->back()->with('loginError', 'ایمیل یا کلمه عبور اشتباه می باشد');

    }

    public function doRegister(Request $request)
    {
        //$this->validate($request,[],[]);
        $new_user_data =[
          'bir_email' => $request->input('bir_email'),
          'bir_full_name' => $request->input('bir_full_name'),
          'password' => $request->input('password'),
        ];
        $newUser = User::create($new_user_data);
        if ($newUser && $newUser instanceof User){
            event(new UserRegistered($newUser));
            return redirect('/');
        }
        return redirect()->back()->with('registerError','Import Form ');
    }
    public function register()
    {
        return view('frontend.users.register');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

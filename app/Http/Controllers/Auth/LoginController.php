<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Notifications\VerifyRegistration;
use App\Models\User;
use Illuminate\Http\Request;

use Auth;


class LoginController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Login Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles authenticating users for the application and
  | redirecting them to your home screen. The controller uses a trait
  | to conveniently provide its functionality to your applications.
  |
  */

  use AuthenticatesUsers;

  /**
  * Where to redirect users after login.
  *
  * @var string
  */
  protected $redirectTo = '/';

  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('guest')->except('logout');
  }

  public function login(Request $request)
  {
    $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required',
    ]);

    //Find User by this email
    $user = User::where('email', $request->email)->first();

    if ($user->status == 1) {
      // login This User

      if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        // Log Him Now
        return redirect()->intended(route('index'));
      }else {
        session()->flash('sticky_error', 'Invalid Login');
        return back();
      }
    }else {
      // Send him a token again
      if (!is_null($user)) {
        $user->notify(new VerifyRegistration($user));

        session()->flash('success', 'A New confirmation email has sent to you.. Please check and confirm your email');
        return redirect('/');
      }else {

        session()->flash('sticky_error', 'Please login first !!');
        return redirect()->route('login');
      }
    }

  }
}

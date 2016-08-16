<?php

namespace BillJellesmaBlog\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use BillJellesmaBlog\Models\User;
class AuthController extends Controller
{
  public function getSignup()
  {
    return view('auth.signup');
  }
  public function postSignup(Request $request)
  {
    $this->validate($request, [
      'email' => 'required|unique:users|email|max:255',
      'username' => 'required|unique:users|alpha_dash|max:20',
      'password' => 'required|min:6',
    ]);

    User::create([
      'email' => $request->input('email'),
      'username' => $request->input('username'),
      'password' => bcrypt($request->input('password')),
    ]);

    return redirect()->route('home')->with('info', 'Your account is created! You may now sign in!');
  }
  public function getSignin()
  {
    return view('auth.signin');
  }
  public function postSignin(Request $request)
  {
    $this->validate($request, [
      'username' => 'required',
      'password' => 'required',
    ]);

    if (!Auth::attempt($request->only(['username', 'password']), $request->has('remember'))){
      return redirect()->back()->with('info', 'Could not sign you in');
    }
    return redirect()->route('home')->with('info', 'You are now signed in');
  }

  public function getSignOut(){
    Auth::logout();

    return redirect()->route('home')->with('info', 'You are now signed out');
  }
}
?>

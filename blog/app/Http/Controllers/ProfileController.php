<?php

namespace BillJellesmaBlog\Http\Controllers;
use Auth;
use BillJellesmaBlog\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function getProfile($username){
    $user = User::where('username', $username)->first();
    //if user doesn't exist
    if(!$user){
      abort(404);
    }

    return view('profile.index')
                ->with('user', $user);
  }

  public function getEdit(){
    return view('profile.edit');
  }
  public function postEdit(Request $request){
    $this->validate($request, [
      //alpha means that it can only contain letters
      'first_name' => 'alpha|max:50',
      'last_name' => 'alpha|max:50',
    ]);
    //this uses the auth fascade
    //this gets the currently signed in user
    Auth::user()->update([
      'first_name' => $request->input('first_name'),
      'last_name' => $request->input('last_name'),
    ]);

    return redirect()->route('profile.edit')->with('info', 'Your details have been updated');
  }
}
?>

<?php

namespace BillJellesmaBlog\Http\Controllers;
use DB;
use BillJellesmaBlog\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
  public function getResults(Request $request)
  {
    $query = $request->input('query');

    if(!$query){
      return redirect()->route('home');
    }
    //where clause with raw query
    //TODO use elastisearch
    $users = User::where(DB::raw("CONCAT(first_name, ' ', last_name)"), 'LIKE', "%{$query}%")
            ->orWhere('username', 'LIKE', "%{$query}%")
            ->get();


    return view('search.results')->with('users', $users);
  }
}
?>

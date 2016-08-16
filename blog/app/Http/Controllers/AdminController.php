<?php

namespace BillJellesmaBlog\Http\Controllers;
use Auth;
use BillJellesmaBlog\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function getAdmin(){
    return view('admin.admin');
  }
}

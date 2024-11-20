<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegController extends Controller
{
    public function userdata()
    {
      $User = User::all();
      return view('admin/reg-users',compact ('User'));
   
  }
}

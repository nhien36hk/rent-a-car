<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function message(){
        $contact = Message::all();
        return view('admin.massage', [
            'contacts' => $contact
        ]);
    }
    public function postcontact(Request $request){
        $data = new Message();
        $data -> email = $request['email'];
        $data -> fullname = $request['fullname'];
        $data -> phone = $request['phone'];
        $data -> message = $request['message'];
        $data -> save();
        return redirect() -> back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    //index
    public function index(Request $request){
        if($contents=$request->file('file_var')){
            
            $name=$contents->getClientOriginalName();

            $contents->move('uploads',$name);

        }
        
    }
}

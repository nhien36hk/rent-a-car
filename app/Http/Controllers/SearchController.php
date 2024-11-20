<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarDetail;

class SearchController extends Controller
{
    public function searchcar(Request $request){
        $CarDetail=CarDetail::where('posttype', $request->selectcar)->get();
        return view('car-listing',compact ('CarDetail'));
    }
    public function searchcar_name(Request $request){
        $searchTerm = $request -> search;
        $CarDetail = CarDetail::where('carname', 'like', "%$searchTerm%")->get();
        return view('car-listing',compact ('CarDetail'));
    }
}

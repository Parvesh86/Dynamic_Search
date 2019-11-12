<?php

namespace App\Http\Controllers;

use App\search;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request){

        return $searchData = search::where('Name','like','%'.$request->searchData.'%')->select('Name')->get();
        // return $request->searchData;
    }
}

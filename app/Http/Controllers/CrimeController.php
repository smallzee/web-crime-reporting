<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrimeController extends Controller
{
    //

    public function index(){
        $data['page_title'] = "Home";
        return view('index',$data);
    }

    public function reporting(){
        $data['page_title'] = "Crime Reporting";
        return view('reporting',$data);
    }

    public function crime_report(Request $request){
        return $request;
    }
}

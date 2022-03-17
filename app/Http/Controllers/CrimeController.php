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

    public function about(){
        $data['page_title'] = "About Developer";
        return view('about',$data);
    }

    public function contact(){
        $data['page_title'] = "Contact Us";
        return view('contact',$data);
    }

    public function crime_report(Request $request){
        return $request;
    }
}

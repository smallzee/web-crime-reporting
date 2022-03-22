<?php

namespace App\Http\Controllers;

use App\Reporting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
       $validator = Validator::make($request->all(),[
           'reporter_name'=>'required',
           'reporter_mobile'=>'required',
           'crime_category'=>'required',
           'offence'=>'required',
           'offence_location'=>'required'
       ]);

       if ($validator->fails()){
           return back()->with('flash_error',$validator->errors()->first());
       }

       Reporting::create([
           'reporter_name'=>$request->reporter_name,
           'reporter_mobile'=>$request->reporter_mobile,
           'category_id'=>$request->crime_category,
           'offence'=>$request->offence,
           'offence_location'=>$request->offence_location
       ]);

       return back()->with('flash_success','Reported successfully');
    }
}

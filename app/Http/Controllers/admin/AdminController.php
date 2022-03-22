<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        $data['page_title'] = "Dashboard";
        return view('admin.dashboard',$data);
    }

    public function users(){
        $data['page_title'] = "All Admin";
        return view('admin.user',$data);
    }

    public function add_user(){
        $data['page_title'] = "Create New Admin";
        return view('admin.add-user',$data);
    }

    public function create_new_user(Request $request){

        $validator = Validator::make($request->all(),[
            'email_address'=>'required|unique:users|min:8|max:200',
            'full_name'=>'required',
            'phone_number'=>'required',
            'password'=>'required',
            'service_no'=>'required',
            'rank'=>'required'
        ]);

        if ($validator->fails()){

            $msg = (count($validator->errors()->all()) == 1) ? 'An error occurred' : 'Some error(s) occurred';

            foreach ($validator->errors()->all() as $value){
                $msg.='<p>'.$value.'</p>';
            }

            return redirect()->back()->with('flash_error',$msg)->withInput();

        }

        $user = new User();
        //$user->image = $image;
        $user->email_address = $request->email_address;
        $user->full_name = $request->full_name;
        $user->phone_number = $request->phone_number;
        $user->service_no = $request->service_no;
        $user->rank = $request->rank;
        $user->password = Hash::make($request->password);

        if ($user->save()){
            return back()->with('flash_info','Admin has been added successfully');
        }

    }

    public function edit($id){

        $user = User::find($id);
       $data['page_title'] = "Edit Admin";
       $data['user'] = $user;

       return view('admin.edit',$data);
    }

    public function update_user(Request $request){
        $validator = Validator::make($request->all(),[
            'full_name'=>'required',
            'phone_number'=>'required',
            'service_no'=>'required',
            'rank'=>'required'
        ]);

        if($validator->fails()){
            return back()->with('flash_error',$validator->error()->first());
        }

        $user_id = $request->id;
        $user = User::find($user_id);
        $user->full_name = $request->full_name;
        $user->phone_number = $request->phone_number;
        $user->rank = $request->rank;
        $user->service_no = $request->service_no;
        $user->save();

        return back()->with('flash_info','Account has been updated successfully');
    }

    public function logout(){
        Auth::logout();
        return redirect('auth/login')->with('flash_info','You have logout successfully');
    }
}

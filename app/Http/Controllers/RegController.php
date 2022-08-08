<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\EventBookingRegModel;

/** 
 *Author- Shari Roluthon
 *Date- 7th July 2022
 */
class RegController extends Controller
{
    public function CreateUser(){
        return view('Registration');
    }
    public function RegisteringUser(Request $request){
        $this->validate($request,[
            'name' => 'required|regex:/^[a-zA-Z]+$/u',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required|min:6|max:12',
            'cpassword' => 'required|same:password',
        ],[
            'name.required'=> 'Name is required',
            'name.regex'=> 'Only alphabets are allowed',
            'email.required'=> 'Email is required',
            'phone.required'=> 'Phone no is required',
            'password.required'=> 'Password is required',
            'password.min'=> 'Password atleast should be of length 6',
            'password.max'=> 'Password maximum should be of length 12',
            'cpassword.required'=> 'Password Confirm is required',
            'cpassword.same'=> 'Password and Confirmpassword must be equal',
        ]);
        $obj=new EventBookingRegModel();
        $obj->name=request('name');
        $obj->email=request('email');
        $obj->phone=request('phone');
        $obj->password=request('password');
        $obj->cpassword=request('cpassword');
        $obj->save();
        return redirect('/')->with('success', 'User created successfully.');
    }
    public function Loginuser(){
        return view('Login');
    }
    public function CheckLoginUser(Request $req)
    {
        $email = $req->post('email');
        $password = $req->post('password');
        $req->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $chekLogin = DB::table('eventbookingusers')->where(['email'=>$email,'password'=>$password])->get();
        if(count($chekLogin) > 0 ){
            if($email=='admin@mail.com' && $password=='admin'){
                return redirect('/AdminDashboard');
            }else{
                return redirect('/UserDashboard');
            }         
        }
        else{
            return redirect('/login')->with('alert','Login Failed, Wrong Data');
        }
    }
    public function DashBoardView(){
        return view('dashboard');
    }
}

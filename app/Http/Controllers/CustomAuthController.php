<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\User;
use Hash;
class CustomAuthController extends Controller
{
    public function login(){

return view("auth.login");

    }

    public function registration(){

return view ("auth.registration");
    }




public function registerUser(Request $request)
{
$request->validate([
'first_name'=>'required',
'last_name'=>'required',
'username'=>'required',
'email'=>'required|email|unique:users',
'password'=>'required|min:5|max:12'

]);
$user = new User();
$user->first_name=$request->first_name;
$user->last_name=$request->last_name;
$user->username=$request->username;
$user->email=$request->email;
$user->password= Hash::make($request->password);
$res=$user ->save();

if($res){
    return back()->with ('success','You have registered successfully');

}else {
    return back()->with('fail','Somethimg went wrong');
}
}


public function loginUser(Request $request){
    $request->validate([

        'username'=>'required',

        'password'=>'required|min:5|max:12'

        ]);
$user =User::where('username','=',$request->username)->first();
if($user){
if (Hash::check($request->password,$user->password)){
    $request ->session()->put('loginId',$user->id);

return redirect('dashboard');
}else{
    return back()->with ('fail','Password is incorrect');}
}else{
    return back()->with('fail','invalid username')
;}
}

public function dashboard(){

    $data=array();
    if (Session::has('loginId')){
        $data=User::where('id', '=', Session::get('loginId'))->first();
    }

    return view('admin.index' , compact('data'));
}


public function logout(){
    if(Session ::has('loginId')){
        Session::pull('loginId');
       return  redirect('login');
    }
}
}

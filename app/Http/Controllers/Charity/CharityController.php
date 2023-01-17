<?php

namespace App\Http\Controllers\Charity;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Charity;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\RequestStack;

class CharityController extends Controller
{
    //

    function  create(Request $request){
        $request->validate([
 'name'=>'required',
 'location'=>'required',
 'email'=>'required|email|unique:charities,email',
 'phone' => 'required|unique:charities' ,
 'password'=> 'required | min:5|max:20',
 'cpassword'=>'required |min:5|max:20|same:password',

        ]);
    //     $user = new User();
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->password = \Hash::make($request->password);
    //   //   $user->cpassword = \Hash::make($request->cpassword);
    //     $save = $user->save();

    $doctor =new Charity();
    $doctor->name = $request->name;
    $doctor->location = $request->location;
    $doctor->email =$request->email;
    $doctor->phone = $request->phone;
    $doctor->password = \Hash::make($request->password);
    // $doctor->cpassword =\Hash::make($request->cpassword);
$save= $doctor->save();
if($save){
    return redirect()->back()->with('success','you are now  register successfuly');
}else
return redirect()->back()->with('fail','correct data insert'); 
}

function check(Request $request){
    $request->validate([
        'email'=>"required|email|exists:charities,email",
        'password'=>"required|min:4|max:20",

    ],[
        'email.exists'=>'this is email not exit doctor table',

    ]);
    $Charity=Charity::get();


foreach($Charity as $Charity ){

    $creds =  $request ->only('email','password');
    if($request['status']==1){

    
    $creds = $request->only('email','password');
    if(Auth::guard('charity')->attempt($creds)){
        return redirect()->route('charity.home');
    }else{
        return redirect()->route('charity.login')->with('fail','password correct');
    }
}else{
    return redirect()->route('login')->with('fail','Admin Not permission ');
}
}
}


function logout(Request $request){
    Auth::guard('charify')->logout();
    return redirect('charify/login');
}



}

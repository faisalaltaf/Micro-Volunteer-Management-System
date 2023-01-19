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

    $Charity =new Charity();
    $Charity->name = $request->name;
    $Charity->location = $request->location;
    $Charity->email =$request->email;
    $Charity->phone = $request->phone;
    $Charity->password = \Hash::make($request->password);
    // $Charity->cpassword =\Hash::make($request->cpassword);
$save= $Charity->save();
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
        'email.exists'=>'this is email not exit Charity table',

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
    return redirect()->route('charity.login')->with('fail','Admin Not permission ');
}
}
}


function logout(Request $request){
    Auth::guard('charity')->logout();
    return redirect('charity/login');
}



}

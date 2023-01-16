<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

use App\HelperLibraries\MyHelper;

class UserController extends Controller
{


  public function profile(){
    $id = auth::user()->id;
    $user = User::where('id',$id)->first();
    
    return view('dashboard.user.profile', compact('user'));
  }
    //
    function profile_edit(Request $request){

      $file = $request->file;
      $request->file = MyHelper::image_upload($file,$request);
      $request->password_new = Hash::make($request->password_new);
      $request->password_confirm = Hash::make($request->password_confirm);
      $id = auth::user()->id;
        $admin = User::where('id',$id)->update([
          'email' => $request->email , 
          'name' => $request->first_name ,
          'last_name' => $request->last_name,
          'phone_number' => $request->phone_number,
          'password' => $request->password_new,
          'password_confirm' => $request->password_confirm,
          'file' => $request->file,
        ]);
        $user = User::where('id','1')->first();
      if($admin){
        return response()->json(['status'=>true ,'image'=>$user->file,'phone_number'=>$user->phone_number]);
      }else{
        return false;
      }
    }


    
    function check(Request $request){

      // $user = User::where('id', 1)->update(['password'=>\Hash::make($request->password)]);
      // dd($user);

      

      
$request->validate([
    'email'=> 'required|email|exists:users,email',
    'password'=> 'required |min:5|max:20|',
    
],[
  'email.exists'=>'this is email not exit on  table',
]);


$user=User::get();


foreach($user as $users ){

$creds =  $request ->only('email','password');
if($users['status']==1){
if(Auth::guard('web')->attempt($creds) ){
  return redirect()->route('home');
    
  }else{
    return redirect()->route('login')->with('fail','incorrect credentials');
    
  }
}else{
  return redirect()->route('login')->with('fail','Admin Not permission ');
}
}
}
function logout(){
  Auth::guard('web')->logout();
  return redirect('/login');
  
}


}

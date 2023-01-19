<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Charity;
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
  public function home(){
    $id = auth::user()->id;

    $user = User::where('id',$id)->first();
    return view('dashboard.user.layout.headers.cards', compact('user'));
  }
    //
    function profile_edit(Request $request){
      $id = auth::user()->id;
      $file = $request->file;
      $request->file = MyHelper::image_upload($file,$request,$id);
      $request->password_new = Hash::make($request->password_new);
      $request->password_confirm = Hash::make($request->password_confirm);

        $admin = User::where('id',$id)->update([
          'email' => $request->email , 
          'name' => $request->first_name ,
          'last_name' => $request->last_name,
          'phone_number' => $request->phone_number,
          'password' => $request->password_new,
          'password_confirm' => $request->password_confirm,
          'file' => $request->file,
        ]);
        $user = User::where('id',$id)->first();
        
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
    return redirect()->route('user.login')->with('fail','incorrect credentials');
    
  }
}else{
  return redirect()->route('user.login')->with('fail','Admin Not permission ');
}
}
}
function logout(){
  // dd('log');
  Auth::guard('web')->logout();
  
  return redirect()->route('user.login');
  
}

function create(Request $request){
  $request->validate([
      'name'=>'required',
      'email'=>'required |email|unique:users,email',
      'password'=> 'required|min:5|max:20',
      'cpassword'=>'required|min:5|max:20|same:password'
  ]);

  $user = new User();
  $user->name = $request->name;
  $user->email = $request->email;
  $user->password = \Hash::make($request->password);
//   $user->cpassword = \Hash::make($request->cpassword);
  $save = $user->save();

  if($save ){
return redirect()->back()->with('success','you are now  register successfuly');

  }else{
return redirect()->back()->with('fail', 'you are correct details');
  }
}

public function charitylist(){
  $Charity = Charity::get();
  $id = auth::user()->id;

  $user = User::where('id',$id)->first();
  return view('dashboard.user.charitylist',compact('Charity','user'));
}
public function donationform(){
  $id = auth::user()->id;
  $user = User::where('id',$id)->first();
  return view('dashboard.user.donateform',compact('user'));
}

}

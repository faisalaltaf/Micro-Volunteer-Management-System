<?php
namespace App\HelperLibraries;


use Schema;
use App\Http\Requests\Request;
use App\Models\User;
use Illuminate\Support\Facades\File;
class MyHelper {
    public static function image_upload($file,$request ){
        if($request->file !=null){
            $parag_image = $file->getClientOriginalName();
            if(File::exists( $parag_image)) {
              File::delete( $parag_image);
            }
            $parag_image = $file->getClientOriginalName();
            $imageName = $parag_image;
            $request->file->move(public_path('profile_image'), $imageName);
            return $file->getClientOriginalName();
          }
          $user = User::where('id','1')->first();
          return $user->file;
    }
}



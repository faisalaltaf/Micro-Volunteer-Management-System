@extends('dashboard.user.home')


@section('content')

<style>
* {
    margin: 0;
    padding: 0
}



.card {
    width: 750px;
    background:transparent linear-gradient(160deg, #3500FA 0%, #36059E 100%) 0% 0% no-repeat padding-box !important;
    border: none;
    color: white;
    cursor: pointer;
    transition: all 0.5s;
}


.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}



.profile-button:hover {
    background: #2dce89
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
.text-black-50 {
    color: rgb(255 255 255) !important;
}
.img_change input[type="file"] {
    display: none;
}
</style>


<div class="header pb-4 pt-5 pt-md-7" >

    <div class="container-fluid">
    <h1 class="Polaris-Header-Title dgc-title" >Admin Profile</h1>
    <div class="py-2">
    <button id="click_profile_edit" type="button" class="btn btn-success  fliter-wraps" >
           Profile Edit 
          </button>
    <button id="click_profile_view" type="button" class="btn btn-success  fliter-wraps" style="display:none;">
           Profile View 
          </button>
    </div>   
 
<div class="container rounded bg-white" id="profile_edit_div" style="display:none;">
    <div class="row">
    

 
        <div class="col-lg-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img id="image_change" class="rounded-circle mt-5" width="150px" src="{{asset('profile_image/')}}/{{$user->file}}"><h5 class="font-weight-bold">{{$user->name}}</ class="text-black-50" >{{$user->email}}</h2><span> </span></div>
        </div>
     
        <div class="col-lg-5 border-right">
        <form id="profile_upload">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
              
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name First</label><input type="text" name="first_name" class="form-control" placeholder="first name" value="{{$user->name}}" required></div>
                    <div class="col-md-6"><label class="labels">Last Name</label><input type="text" name="last_name" class="form-control" value="{{$user->last_name}}"  placeholder="last name" required></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Email Address</label><input type="email" name="email" class="form-control" placeholder="enter Email" value="{{$user->email}}" required></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input  name="phone_number" type="text" class="form-control" placeholder="enter phone number" value="{{$user->phone_number}}" required></div>
                </div>
               
                <!-- <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div> -->
                <div class="mt-5 text-center"><button class="btn btn-success profile-button" type="submit">Save Profile</button></div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="p-3 py-5">
            <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">New Password</label><input id="password_new" name="password_new" type="password" class="form-control" placeholder="enter new password" value="" required></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Confirm Password </label><input id="password_confirm" name="password_confirm" type="password" class="form-control" placeholder="enter password confirm" value="" required></div>
                    <span id='message'></span>
                </div>
                <div class="col-md-12 mt-3 " style="
    text-align: center;
    border: 1px solid #E2E2E2;
    border-radius: 4px;
    padding: 10px;
    width: 100%;
"><label class="img_change" style="padding: 9px 15px;
    background: #2dce89  0% 0% no-repeat padding-box;

    border: 1px solid #D2E8F9;
    border-radius: 4px;
    display: table;
    color: white;
    cursor: pointer;
    margin: 0px auto;
    font-size: 14px;
    margin-bottom: 8px;     font-weight: 600;
    font-size: 14px;"> Upload Video <input type="file" name="file" size="60"> </label> </div> <br>
                <!-- <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div> -->
            </div>
        </div>
        </form>
    </div>
    
</div>
</div>

</div>
    
<section class="align-items-center" style="background-color: #f4f5f7;color:white;display:block;" id="profile_view_div">
  <div class="container ">
    <div class="admin_profile">
    <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img id="profile_image_show" src="{{asset('profile_image/')}}/{{$user->file}}"
                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                <h5 style="color:white;"> Admin</h5>
              <p>{{$user->name}} {{$user->last_name}}</p>
             
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
            
                    <h6 style="color:white;">Profile Admin</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div  class="col-6 mb-3" >
                    <h6 style="color:white;">Email</h6>
                    <h6 style="color:white;">{{$user->email}}</h6>
                   
                  </div>
                  <div class="col-6 mb-3">
                  <h6 style="color:white;">Phone Number</h6>
                    <h6 id="number_admin" style="color:white;">{{$user->phone_number}}</h6>
                  </div>
                </div>
               
             
                <div class="d-flex justify-content-start">
           
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>
</div></div>


    <!-- <div class="col-lg-12 col-md-12">
            <div class="form-group video_upload video_wraps">
                <div class="label_upload-video">
                    <label>Upload video : </label>
                </div>
                <div class="store_wrap_logo" style="
    text-align: center;
    border: 1px solid #E2E2E2;
    border-radius: 4px;
    padding: 30px;
    width: 50%;
">
                    
                </div>
            </div>
        </div>
 -->

    
        @endsection


        
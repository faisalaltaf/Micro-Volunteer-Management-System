
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('assets_login/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('assets_login/css/style.css')}}">
</head>
<body>

    <div class="main" style="background:#F4F9FD;padding: 75px 0;">

        <!-- Sign up form -->
   

        <!-- Sing in  Form -->
        <section class="sign-in">
       
            <div class="container" style="background:transparent linear-gradient(297deg, #3604B0 0%, #3501E9 100%) 0% 0% no-repeat">


                <div class="signin-content">
             
                    <div class="signin-image" style="vertical-align:middle;    margin-top: 8px;">
                        <figure><img src="{{ asset('argon') }}/img/brand/pngwing.com.png" alt="sing up image"></figure>
                    </div>

                 
<div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        

                        <form method="POST" action="{{route('user.create')}}" class="register-form" id="register-form" autocomplete="off">

                            @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" value="{{ old ('name')}}"/>
                           <span style="color: red;" class="text-danger">@error('name'){{ $message }} @enderror</span>

                            </div>
                            <div class="form-group">
                                <label for="last_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="last_name" id="last_name" placeholder="Your last name" value="{{ old ('last_name')}}"/>
                           <span style="color: red;" class="text-danger">@error('last_name'){{ $message }} @enderror</span>

                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" value="{{old('email')}}"/>
                         
                           @error('email')
                                    <span style="color: red;" class="invalid-feedback" role="alert">
                                {{ $message }}
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password" value="{{old('password')}}"/>
                           <span style="color: red;" class="text-danger">@error('password'){{$message}} @enderror</span>

                            </div>
                            <div class="form-group" style="color: red;">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="cpassword" id="re_pass" placeholder="Repeat your password" value="{{old('cpassword')}}"/>
                           <span class="text-danger ">@error('cpassword'){{$message}} @enderror</span>

                            </div>
                            <!-- <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                           
                            </div> -->
                            <div class="form-group form-button">
                                <input type="submit"  id="signup" class="form-submit" value="Register" style="background:#09BB96;"/>
                            
                            </div>
                            
                        </form>
                        <div class="signup-image">
                     
                     <a style="color:white;" href="{{route('user.login')}}" class="signup-image-link">I am already member</a>
                 </div>
                        @if(Session::get('success'))
                            <div style="color: green;">
                            {{Session::get('success')}}
                            @endif
                            </div>

                            @if(Session::get('fail'))
                            <div style="color:red;">
                            {{Session::get('fail')}}
                            </div>
                            @endif
                            
                    </div>
                  
                    </div>
              
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{asset('assets_login/vendor/jquery/jquery.min.js')}}"></script>
   
    <script src="{{asset('assets_login/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>





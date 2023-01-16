
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

                    <div class="signin-form">
                        <h2 class="form-title" style="font-size:25px;">Micro-Volunteer Management System</h2>
                        <form method="POST" action="{{ route('check')}}" id="" >
                        @csrf
                     

                       
                            <div class="form-group" style="border-radius: 3px;">
                                <label for="your_name"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="your_name" placeholder="your email"  value="{{ old('email')}}"/>
                                <span style="color: red;" class="text-danger">@error('email'){{$message}} @enderror</span>

                          
                            </div>   
                            <div class="form-group" style="border-radius: 3px;">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password" value="{{ old('password') }}" />
                            </div>            
                            <span style="color: red;" class="text-danger">@error('password'){{$message}} @enderror</span>
                            <!-- <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div> -->
                            <div class="form-group form-button ">
                                <input type="submit"  class="form-submit" style="background:#09BB96;" />
                            </div>
                        </form>
                        <div class="signup-image">
                     
                     <a style="color:white;" href="{{route('user.register')}}" class="signup-image-link">Sign Up</a>
                 </div>
                        @if(Session::get('fail'))
                            <div style="color: red;">
                            <strong>
                            {{Session::get('fail')}}
                            </strong>
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
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Donate User') }}</title>
        <!-- Favicon -->
        <link href="https://www.shopkeepertools.com/wp-content/uploads/2021/12/shopkeeper-logo.svg" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Extra details for Live View on GitHub Pages -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
        <!-- Icons -->
        <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Argon CSS -->
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
       
        <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
    <style type="text/css">
      
      .navbar-vertical.navbar-expand-md .navbar-nav .nav-link {
        color: white;
/* font-weight: 800; */

        }
       
        
	canvas#buyers {
	    width: 100% !important;
	}
    .bg-gradient-primary {
      background: linear-gradient(87deg, #f5f6fc 0, #f5f6fc 100%) !important;

}
.dgc-title {
  /* font-size: calc( -4em + 28vmin ); */
  font-weight: 900;
  color: #3603B9;
  
  --x-offset: -0.0625em;
  --y-offset: 0.0625em;
  --stroke: 0.025em;
  --background-color: white;
  --stroke-color: lightblue;
  
  text-shadow: 
    
    var(--x-offset)
    var(--y-offset)
    0px
    var(--background-color), 
    
    calc( var(--x-offset) - var(--stroke) )
    calc( var(--y-offset) + var(--stroke) )
    0px
    var(--stroke-color);
  
}
.top_title {
  font-size: 34pt;
  font-family: 'Luckiest Guy';
  color: #fff;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-shadow:   0px -6px 0 #212121,  
                 0px -6px 0 #212121,
                 0px  6px 0 #212121,
                 0px  6px 0 #212121,
                -6px  0px 0 #212121,  
                 6px  0px 0 #212121,
                -6px  0px 0 #212121,
                 6px  0px 0 #212121,
                -6px -6px 0 #212121,  
                 6px -6px 0 #212121,
                -6px  6px 0 #212121,
                 6px  6px 0 #212121,
                -6px  18px 0 #212121,
                 0px  18px 0 #212121,
                 6px  18px 0 #212121,
 
}
.loader{
		display: none;
	}

	.__showloader {
	    position: fixed;
	    width: 100%;
	    height: 100%;
	    top: 0;
	    left: 0;
	    right: 0;
	    bottom: 0;
	    background-color: rgba(0,0,0,0.2);
	    z-index: 2;
	    cursor: pointer;
	    text-align: center;
	    display: flex;
	    align-items: center;
	    justify-content: center;
	}

	  .__showloader svg {
	  position: absolute;
	  top: 50%;
	  left: 50%;
	  margin: -20px 0 0 -20px;
	  width: 40px;
	  height: 40px;
	  z-index: 1;
	  -webkit-animation: spin .7s linear infinite;
	    animation: spin .7s linear infinite;
	    z-index: 99999 !important;
	    opacity: 1 !important; 
	  }
	  .__showloader svg path {
	  fill: #3501e9;
	  }
	  @-webkit-keyframes spin {
	  0%   {-webkit-transform: rotate(0deg);}

	  100% {-webkit-transform: rotate(360deg);}
	  }
	  @keyframes  spin {
	  0%   {transform: rotate(0deg);}

	  100% {transform: rotate(360deg);}
	  }
    </style>
    </head>
    <body class="{{ $class ?? '' }}">
        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @include('dashboard.user.layout.navbars.sidebar')
        @endauth
        
        <div class="main-content">
            @include('dashboard.user.layout.navbars.navbar')
            @yield('content')
        </div>
        @guest()
            @include('dashboard.user.layout.footers.guest')
        @endguest
        <div class="loader"><span><svg viewBox="0 0 32 32"><path d="M16 32c-4.274 0-8.292-1.664-11.314-4.686s-4.686-7.040-4.686-11.314c0-3.026 0.849-5.973 2.456-8.522 1.563-2.478 3.771-4.48 6.386-5.791l1.344 2.682c-2.126 1.065-3.922 2.693-5.192 4.708-1.305 2.069-1.994 4.462-1.994 6.922 0 7.168 5.832 13 13 13s13-5.832 13-13c0-2.459-0.69-4.853-1.994-6.922-1.271-2.015-3.066-3.643-5.192-4.708l1.344-2.682c2.615 1.31 4.824 3.313 6.386 5.791 1.607 2.549 2.456 5.495 2.456 8.522 0 4.274-1.664 8.292-4.686 11.314s-7.040 4.686-11.314 4.686z"></path></svg></span></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            $(document).on('click','.dropdown1 button',function(){
    $('#show').text($(this).text());
             });
$(document).ready(function() {
  $('#show').text($(".dropdown1 button[id='default-option']").text());
});  
        </script>
<!-- chart start code  -->  
<script src="{{ asset('argon') }}/js/argon.js?v=1.0.0">
</script>
       
        @stack('js')

    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
    $(document).ready( function () {
        $('#index-table').DataTable({
        });
    } );
    </script>
<script>

  
// initilize toster
  // end toster 
// =====profile form js start =====//
// ===============================//
$('#password_new, #password_confirm').on('keyup', function () {
  if ($('#password_new').val() == $('#password_confirm').val()) {
    $('#message').html('Matching').css('color', 'white');
    $('#message').html('')
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});


$(document).ready(function() {
    $.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});
        $("#profile_upload").on("submit", function(e) {
            e.preventDefault();
//   return console.log('hello');
     
//           var bar = $('#bar');
//          var percent = $('#percent');
            var formData = new FormData(this);
//             thumbnail = document.querySelector('#thumbnail').value;
//             url_video = document.querySelector('#url_video').value;
            password_new = document.querySelector('#password_new').value;
            password_confirm = document.querySelector('#password_confirm').value;
            if(password_new == ""){
        return toastr.error("Bad!", "Fill the password ");
    }
            if(password_confirm == ""){
        return toastr.error("Bad!", "Fill the password ");
    }
   
            var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
if(!password_new.match(passw)) {
    return toastr.error("Bad!", "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/");
}

if(password_new.length < 8) {  
    return toastr.error("Bad!", "greaten then 8 char");  
    
  }  
  if(password_new.length > 30) {  
    return toastr.error("Bad!", "less then 30 char");
  } 


    if(password_confirm != password_confirm ){
        return toastr.error("Bad!", "Not match ");
    }
   
  console.log(status);
            $.ajax({
                url: '/profile_edit',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                cache:false,
				enctype: 'multipart/form-data',
              
            beforeSend: function(){
            jQuery('.loader').addClass('__showloader');
          },
                success: function(response) {
                    jQuery('.loader').removeClass('__showloader');
                    toastr.success("Good job!", "success");
                    if(response.status ==true){ 
                      document.getElementById("image_change").src = "{{ asset('profile_image') }}"+'/'+response.image;
                      document.getElementById("change_image_nav").src = "{{ asset('profile_image') }}"+'/'+response.image;
                      document.getElementById("profile_image_show").src = "{{ asset('profile_image') }}"+'/'+response.image;
                      document.getElementById("number_admin").innerHTML = response.phone_number;
                      // document.getElementById("image_change").src = "{{ asset('profile_image') }}"+'/'+response.image;
                    }
                     else if(response == false){
                       
                     }
              
                
                    
                }
            });
        });
});



function upload_image() 
{
  var bar = $('#bar');
  var percent = $('#percent');
  $('#myForm').ajaxForm({
    beforeSubmit: function() {
      document.getElementById("progress_div").style.display="block";
      var percentVal = '0%';
      bar.width(percentVal)
      percent.html(percentVal);
    },

    uploadProgress: function(event, position, total, percentComplete) {
      var percentVal = percentComplete + '%';
      bar.width(percentVal)
      percent.html(percentVal);
    },
    
	success: function() {
      var percentVal = '100%';
      bar.width(percentVal)
      percent.html(percentVal);
    },

    complete: function(xhr) {
      if(xhr.responseText)
      {
        document.getElementById("output_image").innerHTML=xhr.responseText;
      }
    }
  }); 
}
// =====profile form js end =====//
// ===============================//

// click button call  profile eidt click
$(document).ready(function(){
  $("#click_profile_edit").click(function(){
    console.log('dashboard');
    
    document.getElementById("profile_view_div").style.display = "none";   
    document.getElementById("click_profile_edit").style.display = "none";   
    document.getElementById("click_profile_view").style.display = "block";   
    document.getElementById("profile_edit_div").style.display = "block";   
  });
});
$(document).ready(function(){
  $("#click_profile_view").click(function(){
    console.log('dashboard');
    
   
    document.getElementById("click_profile_view").style.display = "none";   
    document.getElementById("profile_edit_div").style.display = "none";  
    document.getElementById("profile_view_div").style.display = "block";   
    document.getElementById("click_profile_edit").style.display = "block";  
  });
});
</script>

    </body>
</html>
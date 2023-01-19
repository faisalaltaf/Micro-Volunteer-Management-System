<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation</title>
    <!-- CSS ADD END -->
    @include('frontsite.layouts.css')
    <!-- CSS ADD  END-->
</head>
<body>

   <!-- footer ADD END -->
   @include('frontsite.layouts.header')
    <!-- footer ADD  END-->  
    <main>
    @yield('content')
    </main>
   <!-- footer ADD END -->
   @include('frontsite.layouts.footer')
    <!-- footer ADD  END-->  
    <!-- JS ADD END -->
    @include('frontsite.layouts.js')
    <!-- JS ADD  END-->   
</body>
</html>
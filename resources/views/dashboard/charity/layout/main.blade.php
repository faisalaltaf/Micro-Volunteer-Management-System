<!DOCTYPE html>
<html lang="en" class="perfect-scrollbar-on">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @include('dashboard.charity.layout.css')
    <title> Admin Dashboard</title>
</head>
<body>

<div class="wrapper">

  
  
  
  @include('dashboard.charity.layout.sidebar')
  <div class="main-panel ps-container ps-theme-default ps-active-y" data-ps-id="f67a9759-3221-53c1-60ed-cf9903e269d7">
<div class="main-panel ps ps--active-y">

  @include('dashboard.charity.layout.header')
  
  <div class="content">
    <div class="container-fluid">
      <div class="container">
        
        
        <main class="px-4">
          @yield('content')
        </main> 
        
      </div>
        
        </div></div></div>
        @include('dashboard.charity.layout.footer')

      </div>
      
      <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: -761.6px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div>
      <div class="ps-scrollbar-y-rail" style="top: 761.6px; right: 0px; height: 408px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 265px; height: 142px;"></div></div>
</div>

</body>
@include('dashboard.charity.layout.js')
</html>
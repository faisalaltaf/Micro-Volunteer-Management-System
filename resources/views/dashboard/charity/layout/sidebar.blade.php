<div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper ps ">
        <div class="logo px-4">
          
          <a href="{{route('charity.profile')}} " class="simple-text logo-normal">
          {{Auth::guard()->user()->name}}
          </a>
        </div>
        <ul class="nav">
          <li class="active ">
            <a href="{{route('charity.home')}}">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./notifications.html">
              <i class="tim-icons icon-bell-55"></i>
              <p>Amount List</p>
            </a>
          </li>
          <li>
            <a href="./user.html">
              <i class="tim-icons icon-single-02"></i>
              <p>Children List</p>
            </a>
          </li>
          <li>
            <a href="{{route('charity.logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit(); ">
              <i class="tim-icons icon-world"></i>
              <p>Logout</p>
              <form action="{{route('charity.logout')}}" method="post" id="logout-form">
    @csrf</form>
            </a>
          </li>
          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="tim-icons icon-spaceship"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li>
        </ul>
      <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
    </div>
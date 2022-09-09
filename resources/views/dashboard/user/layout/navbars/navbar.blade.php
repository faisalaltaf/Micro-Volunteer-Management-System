@auth()
    @include('dashboard.user.layout.navbars.navs.auth')
@endauth
    
@guest()
    @include('dashboard.user.layout.navbars.navs.guest')
@endguest
    @section('sidebar')
     <div id="sidebar-wrapper" >
         <img src="{{ URL::to('img/profil.png') }}" class="img-cvr" />
          <ul class="sidebar-nav">
            <li><a href="{{ route('user.home') }}" class="btn {{Request::is('home') ? 'active' : ''}}"><span class="icon i1"></span><span class="sidebar-title">PLANER</span></a><hr></li>
            <li><a class="btn {{Request::is('progress') ? 'active' : ''}}" href="{{ route('user.progress') }}"><span class="icon i2"></span><span class="sidebar-title">NAPREDAK</span></a><hr></li>
            <li><a class="btn {{Request::is('menu') ? 'active' : ''}}" href="{{ route('user.menu') }}"><span class="icon i3"></span><span class="sidebar-title">JELOVNIK</span></a><hr></li>
            <li><a class="btn {{Request::is('workout') ? 'active' : ''}}" href="{{ route('user.workout') }}"><span class="icon i4"></span><span class="sidebar-title">VJEŽBE</span></a><hr></li>
            <li><a class="btn {{Request::is('user') ? 'active' : ''}}" href="{{ route('user') }}"><span class="icon i5"></span><span class="sidebar-title">KORISNIK</span></a></li>
          </ul>
          <a class="logout-d" href="{{ route('user.logout') }}">Logout</a>
      </div>
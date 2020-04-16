
    @foreach ($header as $item)
    <header class="header header--bg " style="background-image: url({{asset('storage/'.$item->photo)}})">
      <div class="container">
        <nav class="navbar">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span> 
            </button>
            <a class="navbar-brand" href="#">DART AGENCY</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav mx-auto">
              <li><a href="#">HOME</a></li>
              <li><a href="#">SERVICES</a></li>
              <li><a href="#">FEATURES</a></li> 
              <li><a href="#">PORTFOLIO</a></li> 
              <li><a href="#">BLOG</a></li> 
              <li><a href="#">CONTACT</a></li>
              @if(Auth::check() && Auth::user()->role_id ==1)
              <li><a href="{{route('admin.index')}}">ADMIN</a></li>
              @else
              @endif

              @guest
              <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
              @if (Route::has('register')) 
              <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
              @endif
              @else
              <li>
              <a class=" text-dark" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>
              
            </li>
        
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                          </form>

          @endguest




            </ul>
            
          </div>
        </nav>
       
        <div class="header__content text-center">
          <h1 class="header__content__title">CREATIVE AGENCY</h1>
              
          <p class="header__content__paragraph">{{$item->text}}</p>
          @endforeach
          <a class="button button--margin-right button--hovetr" href="#">LARN MORE</a>
          <a class="button button--hover" href="#" >PURCHASE</a>
        </div>
      </div>
    </header>




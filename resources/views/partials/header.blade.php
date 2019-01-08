<div class="top-header">
    <div class="menu-bar">
        <i class="fas fa-bars"></i>
    </div>
    <div class="wrapper">
        <h1 class="logo">
            <a href="/">ქუდები</a>
        </h1>
        <form class="search" action="/search" method="GET">
            <input type="text" name="search" placeholder="ძებნა">
            <button class="search-btn" name="submit"><i class="fas fa-search"></i></button>
        </form>
        <div class="nav-icons">
            @guest
                <a class="nav-link" href="{{ route('login') }}">ავტორიზაცია</a>
                @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}">რეგისტრაცია</a>
                @endif
            @else
                <a class="nav-link" href="/signup"><i class="fas fa-user"></i></a>
                <a class="nav-link" href="#"><i class="fas fa-heart"></i></a>
                <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>

                <a class="nav-link" href="/home">
                    {{ Auth::user()->name }} 
                </a>

                <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                
            @endguest
        </div>
    </div>
</div>
<div class="clear"></div>

<nav class="bottom-header">
    <div class="wrapper">
        <ul class="navbar">
            @foreach($categories as $category)
                <li class="nav-item">
                    <a class="nav-link" href="/category/{{$category->id}}">
                        {{$category->title}}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>
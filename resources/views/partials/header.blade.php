<div class="top-header">
    <div class="menu-bar">
        <i class="fas fa-bars"></i>
    </div>
    <div class="wrapper">
        <h1 class="logo">
            <a href="/">ქუდები</a>
        </h1>
        <form class="search" action="" method="POST">
            <input type="text" name="" placeholder="ძებნა">
            <button class="search-btn" name="search"><i class="fas fa-search"></i></button>
        </form>
        <div class="nav-icons">
            <a class="nav-link" href="/signup"><i class="fas fa-user"></i></a>
            <a class="nav-link" href="#"><i class="fas fa-heart"></i></a>
            <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
        </div>
    </div>
</div>
<div class="clear"></div>

<nav class="bottom-header">
    <div class="wrapper">
        <ul class="navbar">
           {{--  @foreach($categories as $category)
                <li class="nav-item">
                    <a class="nav-link" href="/category/{{$category->id}}">
                        {{$category->title}}
                    </a>
                </li>
            @endforeach --}}
        </ul>
    </div>
</nav>
<div id="home"></div>
<header id="header" class="fixed-top  d-flex justify-content-center align-items-center header-transparent">
    <nav class="nav-menu d-none d-lg-block">
        <ul>
            @foreach ($navbar as $item)
                <li><a href="{{$item->chemin}}">{{$item->titre}}</a></li>
            @endforeach
        </ul>
    </nav><!-- .nav-menu -->
</header>

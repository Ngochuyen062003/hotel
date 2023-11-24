<header class="header_area">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand " href="index.html"><img src="{{ asset('client/assets/image/logos/logo3.png')}}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav" style="margin-left: 20%">
                    <li class="nav-item @yield('link-active-index')"><a class="nav-link" href="{{route('client.home')}}">Home</a></li>
                    <li class="nav-item @yield('link-active-about')"><a class="nav-link" href="{{route('client.about')}}">About us</a></li>
                    <li class="nav-item @yield('link-active-accommodation')"><a class="nav-link" href="{{route('client.accommodation')}}">Accommodation</a></li>
                    <li class="nav-item @yield('link-active-gallery')"><a class="nav-link" href="{{route('client.gallery')}}">Gallery</a></li>
                    <li class="nav-item @yield('link-active-blogs')"><a class="nav-link" href="{{route('client.blogs')}}">Blogs</a></li>
                    {{-- <li class="nav-item @yield('link-active')"><a class="nav-link" href="elements.html">Elemests</a></li> --}}
                    <li class="nav-item @yield('link-active-contact')"><a class="nav-link" href="{{route('client.contact')}}">Contact</a></li>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My account</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="{{ route('client.sign-in')}}">My profile</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('client.sign-in')}}">Sign-in</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

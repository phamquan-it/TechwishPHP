

    <header>
        <div class="container-fluid bg-nav">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-nav py-2">
                    <div class="container-fluid">
                        <a class="navbar-brand text-pink" href="#">
                            <img src="img/213.png" alt="" height="100px" width="100px">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon bg-nav"></span>
                        </button>
                        <div class="collapse navbar-collapse  " id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item navbarlink">
                                    <a class="nav-link navbarlink nav-link-font" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item navbarlink">
                                    <a class="nav-link navbarlink nav-link-font" href="#">About Us</a>
                                </li>
                                <li class="nav-item navbarlink">
                                    <a class="nav-link navbarlink nav-link-font" href="#">Your cart</a>
                                </li>
                                <li class="nav-item navbarlink">
                                    <a class="nav-link navbarlink nav-link-font" href="#">Products</a>
                                </li>


                            </ul>
                            {{-- <form class="d-flex mt-2" role="search">
                                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                  <button class="btn btn-outline-success" type="submit">Search</button>
                                </form> --}}
                        </div>
                        <div class="btn-group ">
                            @auth
                                <button type="button" class="btn btn-outline-light">{{ Auth::user()->name }}</button>
                                <button type="button" class="btn btn-outline-light dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="button">
                                    <li><a class="navbarlink text-decoration-none dropdown-item text-center"
                                            href="{{ route('profile.update') }}">Account Settings </a></li>
                                    <li class="text-center dropdown-item">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <a class="nav-link text-danger" :href="route('logout')"
                                                onclick="event.preventDefault();
                                                                        this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            @else
                                <a href="{{ route('login_register') }}" class="btn btn-outline-light">Login</a>
                                <a href="{{ route('login_register') }}" class="btn btn-outline-light">Register</a>
                            @endauth
                        </div>
                    </div>
                </nav>
            </div>

        </div>


    </header>
<header>
    <section class="header-aside">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="m-0">
                        <li>
                            <a href="#">DC POWER&#8480; VISA&#174;</a>
                        </li>
                        <li>
                            <a href="#">ADDITIONAL DC SITES</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="{{ route('comics') }}">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo"
                    class="d-block m-auto logo-img">
            </a>
            <div class="collapse navbar-collapse nav-list" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">CHARACTERS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold border-bottom border-primary active" aria-current="page" href="#">COMICS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">MOVIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold " href="#">TV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">GAMES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">COLLECTIBLES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">VIDEOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">FANS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#">NEWS</a>
                    </li>

                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false" style="border: none">
                        Shop
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </ul>
                </div>
                <form class="d-flex placeorder-form" role="search">
                    <input class="form-control me-2 bi bi-search border-primary" type="search" placeholder="Search" aria-label="Search">
                    <button class="placeorder-search-btn" type="submit">
                      <i class="bi bi-search"></i>
                    </button>
                  </form>
            </div>
        </div>
    </nav>
</header>


{{-- <a href="#">DC POWER&#8480; VISA&#174;</a> --}}

<!-- HEADER -->
{{-- <header>
    <div class="bg-blue">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul>
                        <li>DC POWER&#153; VISA&#174;</li>
                        <li>ADDITIONAL DC SITES</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3 mb-2">
        <div class="row d-flex justify-content-between align-items-center">

            <!-- logo -->

            <div class="col">
                <a href="#" class="logo">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="DC">
                </a>
            </div>

            <!-- navbar -->

            <nav class="col">
                <ul class="d-flex">
                    <li class="p-3 {{ Route::currentRouteName() == 'characters' ? 'active' : ''}}">
                        <a href="{{ route('characters')}}">Characters</a>
                    </li>
                    <li class="p-3 {{ Route::currentRouteName() == 'comics' ? 'active' : ''}}">
                        <a href="">Comics</a>
                    </li>
                    <li class="p-3 {{ Route::currentRouteName() == 'movies' ? 'active' : ''}}">
                        <a href="">Movies</a>
                    </li>
                    <li class="p-3 {{ Route::currentRouteName() == 'tv' ? 'active' : ''}}">
                        <a href="">Tv</a>
                    </li>
                    <li class="p-3 {{ Route::currentRouteName() == 'games' ? 'active' : ''}}">
                        <a href="">Games</a>
                    </li>
                    <li class="p-3 {{ Route::currentRouteName() == 'collectibles' ? 'active' : ''}}">
                        <a href="">Collectibles</a>
                    </li>
                    <li class="p-3 {{ Route::currentRouteName() == 'videos' ? 'active' : ''}}">
                        <a href="">Videos</a>
                    </li>
                    <li class="p-3 {{ Route::currentRouteName() == 'fans' ? 'active' : ''}}">
                        <a href="">Fans</a>
                    </li>
                    <li class="p-3 {{ Route::currentRouteName() == 'news' ? 'active' : ''}}">
                        <a href="">News</a>
                    </li>
                    <li class="p-3 {{ Route::currentRouteName() == 'shop' ? 'active' : ''}}">
                        <a href="">Shop</a>
                    </li>
                    <li class="p-3">
                        <input type='text' placeholder="Search">
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
 --}}

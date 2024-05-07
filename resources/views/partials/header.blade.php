<header>
    <div class="container bg-light">
        <nav class="navbar-expand-sm  d-flex justify-content-between align-items-center">
            <div class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="" style="width: 80px;">
            </div>
            <div class="pages">
                <ul class="list-unstyled d-flex h-100 align-items-center m-0">
                    <li><a href="/characters" class="text-decoration-none text-dark px-2">CHARACTERS</a></li>
                    <li class="h-100 border_active d-flex align-items-center"><a href="/" class=" text-decoration-none px-2 active">COMICS</a></li>
                    <li><a href="/movies" class="text-dark text-decoration-none px-2">MOVIES</a></li>
                    <li><a href="/tv" class="text-dark text-decoration-none px-2">TV</a></li>
                    <li><a href="/games" class="text-dark text-decoration-none px-2">GAMES</a></li>
                    <li><a href="/collectibles" class="text-dark text-decoration-none px-2">COLLECTIBLES</a></li>
                    <li><a href="/videos" class="text-dark text-decoration-none px-2">VIDEOS</a></li>
                    <li><a href="/fans" class="text-dark text-decoration-none px-2">FANS</a></li>
                    <li><a href="/news" class="text-dark text-decoration-none px-2">NEWS</a></li>
                    <li><a href="/shop" class="text-dark text-decoration-none px-2">SHOP</a></li>
                </ul>
            </div>
            <div class="search">
                <div class="mb-3 d-flex align-items-center" style="border-bottom: 3px solid black;">
                    <input type="search" class="form-control border-0" name="search" id="search" aria-describedby="searchHelper" placeholder="Search" />
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>

            </div>
        </nav>
    </div>


</header>
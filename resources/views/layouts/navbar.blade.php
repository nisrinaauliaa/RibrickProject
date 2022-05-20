<!-- Fixed navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
    <img src="img/seterum.png">
    <a class="navbar-brand" href="#"></a>
    <!-- Navbar brand yo -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="container collapse navbar-collapse justify-content-end col-md-7" id="navbarTop" style="margin:0 320px; padding-left: 270px; line-height: 50px; font-size: 16px">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a> </li>
            <li class="nav-item"><a class="nav-link {{ ($active === "info") ? 'active' : '' }}" href="/info">Info dan Tips</a> </li>
            <li class="nav-item"><a class="nav-link {{ ($active === "galeri") ? 'active' : '' }}" href="/galeri">Galeri</a> </li>
            <li class="nav-item"><a class="nav-link {{ ($active === "tentang") ? 'active' : '' }}" href="/tentang">Tentang Kami</a> </li>
        </ul>
    </div>
    </div>
</nav>

{{-- <nav class="navbar navbar-expand-sm navbar-dark bg-light  ">
    <div class="container">
    <a href="#" class="navbar-brand "><img src="img/seterum.png" alt="" width="170px" ></a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>

        </button>
        <div id="menu" class="collapse navbar-collapse justify-content-end col-md-7  " style="margin:0 320px; padding-left: 100px; line-height: 75px; font-size: 19px">
            <ul class="navbar-nav" > 
                <li class="nav-item"><a class="nav-link {{ ($active === "home") ? 'active' : '' }} text-dark px-4" href="/">Home</a> </li>
                <li class="nav-item"><a class="nav-link {{ ($active === "info") ? 'active' : '' }} text-dark px-4" href="/info">Info dan Tips</a> </li>
                <li class="nav-item"><a class="nav-link {{ ($active === "galeri") ? 'active' : '' }} text-dark px-4" href="/galeri">Galeri</a> </li>
                <li class="nav-item"><a class="nav-link {{ ($active === "tentang") ? 'active' : '' }} text-dark px-4" href="/tentang">Tentang Kami</a> </li>
          
            </ul>
        </div>
    </div>
</nav> --}}
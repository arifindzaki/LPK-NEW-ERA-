<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0E6AC7">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo_lpk.png" alt="Bootstrap" width="30" height="32">
            </a>
            <a class="navbar-brand" href="/"><b>LPK IMIAH</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link {{ ($title === "home" ? 'active' : '') }}" href="/">Home</a>
            <a class="nav-link {{ ($title === "about" ? 'active' : '') }}" href="/about">Profile</a>
            <a class="nav-link {{ ($title === "pelatihan" ? 'active' : '') }}" href="/pelatihan">Pelatihan</a>
            <a class="nav-link {{ ($title === "alumni" ? 'active' : '') }}" href="/alumni">Alumni</a>
            <a class="nav-link {{ ($title === "galeri" ? 'active' : '') }}" href="/galeri">Galery</a>
            <a class="nav-link {{ ($title === "contact" ? 'active' : '') }}" href="/contact">Kontak</a>
            </div>
        </div>
        </div>
    </nav>

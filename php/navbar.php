<div class="container-fluid bg-primary text-white pt-4 pb-5 d-none d-lg-flex">
    <div class="container pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex">
                <i class="bi bi-telephone-inbound fs-2"></i>
                <div class="ms-3">
                    <h5 class="text-white mb-0">Appel 24h/24</h5>
                    <span>+243 85 5500 700</span>
                </div>
            </div>
            <img src="http://<?=$_SERVER['HTTP_HOST']?>/img/logo_blanc.png" style="max-height: 50px;" alt="Logo">
            <div class="d-flex">
                <i class="bi bi-envelope fs-2"></i>
                <div class="ms-3">
                    <h5 class="text-white mb-0">Message</h5>
                    <span>contact@telemedrdc.com</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
            <a href="http://<?=$_SERVER['HTTP_HOST']?>/" class="navbar-brand d-lg-none">
                <img src="http://<?=$_SERVER['HTTP_HOST']?>/img/logo.png" style="max-height: 50px;" alt="Logo">
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="http://<?=$_SERVER['HTTP_HOST']?>/" class="nav-item nav-link <?=($current == 'home') ? 'active' : ''?>">Accueil</a>
                    <a href="http://<?=$_SERVER['HTTP_HOST']?>/about/" class="nav-item nav-link <?=($current == 'about') ? 'active' : ''?>">A propos</a>
                    <a href="http://<?=$_SERVER['HTTP_HOST']?>/consult/" class="nav-item nav-link <?=($current == 'consult') ? 'active' : ''?>">Consultations</a>
                    <a href="http://<?=$_SERVER['HTTP_HOST']?>/contact/" class="nav-item nav-link <?=($current == 'contact') ? 'active' : ''?>">Contact</a>
                </div>
                <div class="ms-auto d-none d-lg-flex">
                    <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </nav>
    </div>
</div>
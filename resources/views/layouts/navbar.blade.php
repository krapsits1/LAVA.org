<!-- First Row -->
<div class="container-fluid">
    <div class="row w-100">
        <div class="col-4 d-flex align-items-center">
            <a href="#" class="navbar-brand">
                <img src="{{asset('images/lava_big.png')}}" alt="Logo" style="height: 80px;">
            </a>
        </div>
        <div class="col-4 d-flex justify-content-center align-items-center">
            <h1 class="h4 m-0">Latvijas asinsvadu asociācija</h1>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
            <!-- Social Media Icons (visible only on larger screens) -->
            <div class="d-none d-xl-flex">
                <a href="#" class="me-3"><i class="bi bi-facebook"></i></a>
                <a href="#" class="me-3"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
            </div>

            <!-- Navbar Toggler (visible only on smaller screens) -->
            <button class="navbar-toggler d-xl-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</div>

<!-- Second Row: Navigation -->
<nav class="navbar navbar-expand-lg bg-danger">
    <div class="container-fluid">
        <!-- Collapsible Content -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">            
            <ul class="navbar-nav m-2 flex-row">
                <li class="nav-item mx-2">
                    <a class="nav-link active text-white" href="#">Sākumlapa</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-white" href="#">Par mums</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-white" href="#">Aktualitātes</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-white" href="#">Resursi</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link active text-white" href="#">Publikācijas</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-white" href="#">Instruckijas</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-white" href="#">Pievienojies</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-white" href="#">Kontakti</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Bootstrap CSS and JS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<nav id = "navBar" class="navbar navbar-dark navbar-expand-lg d-flex justify-content-between align-items-center">
    <!-- Logo -->
    <div class ="ms-3" style="width: 80px;">
        <a href="#" class="navbar-brand">
            <img src="{{ asset('images/lava_small_white.png') }}" alt="Logo" class="img-fluid">
        </a>
    </div>

    <!-- Toggler Button -->
    <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible Links -->
    <div class="collapse navbar-collapse flex-grow-1" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item ms-3">
                <a class="nav-link" href="#">{{ __('messages.home') }}</a>
            </li>
            <li class="nav-item ms-3">
                <a class="nav-link" href="#">{{ __('messages.about') }}</a>
            </li>
            <li class="nav-item ms-3">
                <a class="nav-link" href="#">{{ __('messages.news') }}</a>
            </li>
            <li class="nav-item ms-3 dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('messages.info') }}
                </a>
                <div class="dropdown-menu me-3" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">{{ __('messages.instructions') }}</a>
                  <a class="dropdown-item" href="#">{{ __('messages.resources') }}</a>
                  <a class="dropdown-item" href="#">{{ __('messages.publications') }}</a>
                </div>
            </li>       
            <li class="nav-item ms-3">
                <a class="nav-link" href="#">{{ __('messages.join') }}</a>
            </li>
            <li class="nav-item ms-3">
                <a class="nav-link" href="#">{{ __('messages.contact') }}</a>
            </li>
        </ul>
    </div>

    <!-- Facebook Icon -->
    <div class="d-none d-lg-flex">
        <a href="https://facebook.com" target="_blank" class="nav-link me-3" style="width: 80px; text-align: center;">
            <i class="bi bi-facebook fs-2"></i>
        </a>
    </div>
</nav>



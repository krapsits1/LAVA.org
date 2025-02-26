<nav id = "navBar" class="navbar navbar-dark navbar-expand-lg d-flex justify-content-between align-items-center">
    <!-- Logo -->
    <div class ="ms-3" style="width: 80px;">
        <a href="{{route('welcome')}}" class="navbar-brand">
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
                <a class="nav-link" href="{{route('welcome')}}">{{ __('messages.home') }}</a>
            </li>
            <li class="nav-item ms-3">
                <a class="nav-link"  href="{{route('aboutUs')}}" >{{ __('messages.about') }}</a>
            </li>
            <li class="nav-item ms-3">
                <a class="nav-link" href={{('news')}}>{{ __('messages.news') }}</a>
            </li>
            <li class="nav-item ms-3 dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('messages.info') }}
                </a>
                <div class="dropdown-menu me-3" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{route('instructions')}}">{{ __('messages.instructions') }}</a>
                  <a class="dropdown-item" href="{{route('resources')}}">{{ __('messages.resources') }}</a>
                  <a class="dropdown-item" href="{{route('publications')}}">{{ __('messages.publications') }}</a>
                </div>
            </li>       
            <li class="nav-item ms-3">
                <a class="nav-link" href="{{route('join')}}">{{ __('messages.join') }}</a>
            </li>
            <li class="nav-item ms-3">
                <a class="nav-link" href="{{route('contact')}}">{{ __('messages.contact') }}</a>
            </li>
        </ul>
    </div>

    <!-- Facebook Icon -->
    <div class="d-none d-lg-flex">
        <a href="https://www.facebook.com/people/LAVA-Latvijas-AsinsVadu-Asoci%C4%81cija/61566301665761/" target="_blank" class="nav-link me-3" style="width: 80px; text-align: center;">
            <i class="bi bi-facebook fs-2"></i>
        </a>
    </div>
</nav>



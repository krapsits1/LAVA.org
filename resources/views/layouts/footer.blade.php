@include('layouts.modal')
<footer class="mt-3 pt-3 pb-3 d-flex justify-content-between align-items-center border-top" style="background-color: #800020; height:10vh">
    <div class="ms-3 d-flex align-items-center">
        <a href="#" class="footer-brand" style="width: 80px;">
            <img src="{{ asset('images/lava_small_white.png') }}" alt="Logo" class="img-fluid">
        </a>
    </div>
    <span class="fs-6 text-white">&copy; {{ date('Y') }} LAVA, Inc</span>
    <div class="nav-link me-3" style="width: 80px; text-align: center;">
    
        <i data-bs-toggle="modal" data-bs-target="#cookieModal" class="bi bi-cookie text-white fs-2 me-2" style="cursor: pointer;"></i>
      
        <a href="https://www.facebook.com/people/LAVA-Latvijas-AsinsVadu-Asoci%C4%81cija/61566301665761/" target="_blank">
            <i class="bi bi-facebook text-white fs-2"></i>
        </a>
    </div>
    <script src="{{asset('js/script.js')}}" ></script>
</footer>

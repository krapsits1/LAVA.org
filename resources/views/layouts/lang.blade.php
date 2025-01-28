<div class="position-fixed top-50 end-0 translate-middle-y bg-light border shadow p-3 rounded" style="z-index: 1050;">
    <a class="d-block mb-2" href="{{ route('switch-language', ['lang' => 'en']) }}">
        <img src="{{ asset('images/usa_flag.png') }}" alt="English" class="img-fluid" style="width: 30px;">
    </a>
    <a class="d-block" href="{{ route('switch-language', ['lang' => 'lv']) }}">
        <img src="{{ asset('images/latvia_flag.png') }}" alt="Latvian" class="img-fluid" style="width: 30px;">
    </a>
</div>

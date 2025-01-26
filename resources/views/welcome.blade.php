<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.head')
    </head>
    <body>
        @include('layouts.navbar')

        <div class="container-fluid justify-content-center">
            <h3 class="text-center p-3">Latvijas AsinsVadu Asociācija</h3>
        </div>
        <div class="position-fixed top-50 end-0 translate-middle-y bg-light border shadow p-3 rounded">
            <a class="d-block mb-2" href="{{ route('switch-language', ['lang' => 'en']) }}">
                <img src="{{ asset('images/usa_flag.png') }}" alt="English" class="img-fluid" style="width: 30px;">
            </a>
            <a class="d-block" href="{{ route('switch-language', ['lang' => 'lv']) }}">
                <img src="{{ asset('images/latvia_flag.png') }}" alt="Latvian" class="img-fluid" style="width: 30px;">
            </a>
        </div>
        
        


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>

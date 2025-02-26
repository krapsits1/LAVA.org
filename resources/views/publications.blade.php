<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
@include('layouts.navbar')

@include('layouts.lang')


<body>
    <div class="container mt-5">
        <h1 class="pt-4 pb-4 text-center">{{ __('messages.publications_title') }}</h1>
        <div class="d-flex justify-content-center">
            {{-- <iframe src="{{ asset('publications/MedicusBonus_Raksts.pdf') }}" width="90%" height="600px"></iframe> --}}
        </div>
    </div>
    
    @include('layouts.footer')

</body>
</html>

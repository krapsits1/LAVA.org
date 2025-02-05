<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
@include('layouts.navbar')

@include('layouts.lang')
<style>
    .text-responsive {
        font-size: clamp(10px, 2vw, 18px) !important;
    }
</style>

<body>
    @include('layouts.comingSoon')
    @include('layouts.footer')

</body>
</html>

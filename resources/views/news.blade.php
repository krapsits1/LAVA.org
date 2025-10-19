<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
@include('layouts.navbar')

@include('layouts.lang')


<body>
    <main style = "min-height: 75vh;">
        <div class="container mt-5" >
            <h1>{{ __('messages.title') }}</h1>
            <div>
                <p><strong>{{ __('messages.news1_title') }}</strong></p>
                <p><a href="{{ asset('publ/Asinvadu_meistarklases.pdf') }}" target="_blank">{{ __('messages.news1_link') }}</a></p>
                
                <p><strong>{{ __('messages.news2_title') }}</strong></p>
                <p><strong>{{ __('messages.news2_1_title') }}</strong></p>
                <p><a href="{{ asset('publ/Agenda.pdf') }}" target="_blank">{{ __('messages.news1_link') }}</a></p>

                <p><strong>{{ __('messages.news2_2_title') }}</strong></p>

                <p><strong>{{ __('messages.news3_title') }}</strong></p>
                <p><a href="https://wocova.com/" target="_blank">{{ __('messages.news1_link') }}</a></p>
    <!-- 
                <p><strong>{{ __('messages.news4_title') }}</strong></p>
                <p><a href="https://nophonobos2025.com/program/" target="_blank">{{ __('messages.news1_link') }}</a></p>

                <p><strong>{{ __('messages.news5_title') }}</strong></p>
                <p><a href="https://baltanestic.com/" target="_blank">{{ __('messages.news1_link') }}</a></p>

                <p><strong>{{ __('messages.news6_title') }}</strong></p>
                <p>{{ __('messages.news6_description') }}</p>

                <p><strong>{{ __('messages.news7_title') }}</strong></p>
                <p>{{ __('messages.news7_description') }}</p>  -->
            </div>
        </div>
    </main>
    @include('layouts.footer')

</body>
</html>

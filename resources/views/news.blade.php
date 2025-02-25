<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
@include('layouts.navbar')

@include('layouts.lang')


<body>
    <div class="container mt-5">
        <h1>{{ __('messages.title') }}</h1>
        <div>
            <p><strong>{{ __('messages.news1_title') }}</strong></p>
            <p><a href="https://www.masuasociacija.lv/wp-content/uploads/2025/01/AINA_LMakonf_22022025-2.pdf" target="_blank">{{ __('messages.news1_link') }}</a></p>

            <p><strong>{{ __('messages.news2_title') }}</strong></p>
            <p><a href="https://www.rsu.lv/sites/default/files/imce/Dokumenti/programmas/aktualitates_anesteziologija_intens_terapija_programma_2025-rev.pdf" target="_blank">{{ __('messages.news1_link') }}</a></p>

            <p><strong>{{ __('messages.news3_title') }}</strong></p>
            <p>{{ __('messages.news3_description') }}</p>

            <p><strong>{{ __('messages.news4_title') }}</strong></p>
            <p><a href="https://nophonobos2025.com/program/" target="_blank">{{ __('messages.news1_link') }}</a></p>

            <p><strong>{{ __('messages.news5_title') }}</strong></p>
            <p><a href="https://baltanestic.com/" target="_blank">{{ __('messages.news1_link') }}</a></p>

            <p><strong>{{ __('messages.news6_title') }}</strong></p>
            <p>{{ __('messages.news6_description') }}</p>

            <p><strong>{{ __('messages.news7_title') }}</strong></p>
            <p>{{ __('messages.news7_description') }}</p>
        </div>
    </div>
    @include('layouts.footer')

</body>
</html>

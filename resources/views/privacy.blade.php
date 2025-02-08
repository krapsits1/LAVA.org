<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.head')
    </head>
    <body>
        @include('layouts.navbar')
        @include('layouts.lang')
        <main style="min-height: 80vh;">
            <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
                <div class="container">
                    <h1>{{ __('messages.privacy_title') }}</h1>
                    <p>{{ __('messages.privacy_effective_date') }} {{ date('F d, Y') }}</p>
            
                    <h2>{{ __('messages.privacy_section1_title') }}</h2>
                    <p>{{ __('messages.privacy_section1_description') }}</p>
                    <ul>
                        <li>{!! __('messages.privacy_section1_item1') !!}</li>
                        <li>{{ __('messages.privacy_section1_item2') }}</li>
                    </ul>
            
                    <h2>{{ __('messages.privacy_section2_title') }}</h2>
                    <ul>
                        <li>{{ __('messages.privacy_section2_item1') }}</li>
                        <li>{{ __('messages.privacy_section2_item2') }}</li>
                        <li>{{ __('messages.privacy_section2_item3') }}</li>
                    </ul>
            
                    <h2>{{ __('messages.privacy_section3_title') }}</h2>
                    <p>{{ __('messages.privacy_section3_description') }}</p>
                    <ul>
                        <li>{!! __('messages.privacy_section3_item1') !!}</li>
                        <li>{{ __('messages.privacy_section3_item2') }}</li>
                        <li>{{ __('messages.privacy_section3_item3') }}</li>
                    </ul>
            
                    <h2>{{ __('messages.privacy_section4_title') }}</h2>
                    <p>{{ __('messages.privacy_section4_description') }}</p>
            
                    <h2>{{ __('messages.privacy_section5_title') }}</h2>
                    <p>{{ __('messages.privacy_section5_description') }}</p>
                    <ul>
                        <li>{{ __('messages.privacy_section5_item1') }}</li>
                        <li>{{ __('messages.privacy_section5_item2') }}</li>
                        <li>{{ __('messages.privacy_section5_item3') }}</li>
                    </ul>
            
                    <h2>{{ __('messages.privacy_section6_title') }}</h2>
                    <p>{{ __('messages.privacy_section6_description') }}</p>
                    <p>
                        <strong>{{ __('messages.privacy_contact_email_label') }}</strong>
                        lava.latvija@gmail.com
                    </p>
            
                    <p class="mt-3">
                        <strong>{{ __('messages.privacy_last_updated') }} {{ date('F d, Y') }}</strong>
                    </p>
                </div>
            </div>
        </main>
        @include('layouts.footer')
    </body>
</html>

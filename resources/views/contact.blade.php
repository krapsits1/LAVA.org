<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')

    <body>
        @include('layouts.navbar')
        @include('layouts.lang')

        <main style="min-height: 80vh;">
            <div class="container pt-5" style="padding-bottom: 40px;">
                <div class="row align-items-center">
                    <!-- Contact Information Column -->
                    <div class="col-md-6">
                        <h4 style="font-weight: bold; font-size: 1.5rem; color: #800020;">{{ __("messages.contact_information") }}</h4>
                        <p style="margin-bottom: 10px;">
                            <i class="bi bi-building" style="color: #800020; margin-right: 10px;"></i>
                            <strong style="font-weight: bold;">{{ __("messages.contact_name_label") }}</strong>
                            <span style="font-size: 1rem; color: #555;">{{ __("messages.contact_name_value") }}</span>
                        </p>
                        <p style="margin-bottom: 10px;">
                            <i class="bi bi-geo-alt" style="color: #800020; margin-right: 10px;"></i>
                            <strong style="font-weight: bold;">{{ __("messages.contact_address_label") }}</strong>
                            <span style="font-size: 1rem; color: #555;">{{ __("messages.contact_address_value") }}</span>
                        </p>
                        <p style="margin-bottom: 10px;">
                            <i class="bi bi-envelope" style="color: #800020; margin-right: 10px;"></i>
                            <strong style="font-weight: bold;">{{ __("messages.contact_email_label") }}</strong>
                            <a href="mailto:lava.latvija@gmail.com" style="text-decoration: none; color: #555;">{{ __("messages.contact_email_value") }}</a>
                        </p>
                        <p style="margin-bottom: 10px;">
                            <i class="bi bi-telephone" style="color: #800020; margin-right: 10px;"></i>
                            <strong style="font-weight: bold;">{{ __("messages.contact_phone_label") }}</strong>
                            <span style="font-size: 1rem; color: #555;">{{ __("messages.contact_phone_value") }}</span>
                        </p>
                        <a href={{{route('join')}}} class="btn text-white mb-3" style="background-color: #800020; border-radius: 10px; padding: 10px 20px; margin-top: 20px; text-decoration: none;">
                            {{ __('messages.contact_header') }}                        
                        </a>
                    </div>

                    <!-- Google Map Column -->
                    <div class="col-md-6">
                        <div id="map" style="height: 400px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);"></div>
                    </div>
                </div>
            </div>
        </main>

        @include('layouts.footer')
    </body>

    <script src="https://maps.googleapis.com/maps/api/js?key={{$googleApiKey}}&v=weekly&libraries=marker"></script>
    <script src="{{ asset('js/map.js') }}"></script>
</html>

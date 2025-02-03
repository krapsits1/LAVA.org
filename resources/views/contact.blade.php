<!DOCTYPE html>
<html lang="en">
        @include('layouts.head')

    <body>
        @include('layouts.navbar')
        @include('layouts.lang')
        <main style="min-height: 80vh;">

            <div class="container mt-5">
                <div class="row">
                    <!-- Contact Information Column -->
                    <div class="col-md-6">
                        <h4>{{ __("messages.contact_information") }}</h4>
                        <p>
                            <strong>{{ __("messages.contact_name_label") }}</strong>
                            {{ __("messages.contact_name_value") }}
                        </p>
                        <p>
                            <strong>{{ __("messages.contact_address_label") }}</strong>
                            {{ __("messages.contact_address_value") }}
                        </p>
                        <p>
                            <strong>{{ __("messages.contact_email_label") }}</strong>
                            {{ __("messages.contact_email_value") }}
                        </p>
                        <p>
                            <strong>{{ __("messages.contact_phone_label") }}</strong>
                            {{ __("messages.contact_phone_value") }}
                        </p>
                    </div>
            
                    <!-- Google Map Column -->
                    <div class="col-md-6">
                        <div id="map" style="height: 400px;"></div>                     
                    </div>
                </div>
            </div>
            

        </main>
        @include('layouts.footer')
    </body>
    
    <script
        src="https://maps.googleapis.com/maps/api/js?key={{$googleApiKey}}&v=weekly&libraries=marker"
    ></script>
    <script src="{{asset('js/map.js')}}" ></script>
</html>
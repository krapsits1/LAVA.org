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
                        <h2>api: {{$googleApiKey}}</h2>

                        <h2>Contact Information</h2>
                        <p><strong>Company Name:</strong> LAVA (Latvijas Asinsvadu Asociācija)</p>
                        <p><strong>Address:</strong> Riga, Latvia</p>
                        <p><strong>Email:</strong> info@lava.lv</p>
                        <p><strong>Phone:</strong> +371 123 4567</p>
                        <p><strong>Business Hours:</strong> Mon - Fri, 9:00 AM - 5:00 PM</p>
                    </div>
        
                    <!-- Google Map Column -->
                    <div class="col-md-6">
                        <div id="map" style = "height: 400px;"></div>                     
                    </div>

                </div>
            </div>

        </main>
        @include('layouts.footer')
    </body>
    
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXuPWj04KtJH2ZaBHdOawfmtwH3nf_PRc&callback=initMap&v=weekly&libraries=marker"
        defer
    ></script>
    <script src="{{asset('js/map.js')}}" ></script>
</html>
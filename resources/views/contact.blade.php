<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.head')
    </head>
    <body>
        @include('layouts.navbar')
        @include('layouts.lang')
        <main style="min-height: 80vh;">
            <div class="container my-5">
                <div class="row g-4">
                    <!-- Contact Information Column -->
                    <div class="col-md-6">
                        <div class="p-4 bg-light rounded shadow-sm">
                            <h2 class="mb-4 text-primary">Contact Us</h2>
                            <p class="lead mb-4">We'd love to hear from you! Reach out to us for any inquiries or feedback.</p>
                            
                            <div class="mb-4">
                                <h5 class="text-secondary">Address</h5>
                                <p class="mb-0">123 Main Street, Suite 456</p>
                                <p>New York, NY 10001, USA</p>
                            </div>
            
                            <div class="mb-4">
                                <h5 class="text-secondary">Phone</h5>
                                <p class="mb-0">+1 (123) 456-7890</p>
                            </div>
            
                            <div class="mb-4">
                                <h5 class="text-secondary">Email</h5>
                                <p class="mb-0">info@example.com</p>
                            </div>
            
                            <div class="mb-4">
                                <h5 class="text-secondary">Follow Us</h5>
                                <a href="#" class="text-decoration-none me-3">
                                    <i class="fab fa-facebook fa-2x text-primary"></i>
                                </a>
                                <a href="#" class="text-decoration-none me-3">
                                    <i class="fab fa-twitter fa-2x text-info"></i>
                                </a>
                                <a href="#" class="text-decoration-none">
                                    <i class="fab fa-instagram fa-2x text-danger"></i>
                                </a>
                            </div>
                        </div>
                    </div>
            
                    <!-- Google Map Column -->
                    {{-- <div class="col-md-6 d-flex"> --}}
                        <div id="map"></div>

                    {{-- </div> --}}
                </div>
            </div>  


        </main>
        @include('layouts.footer')
    </body>

    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXuPWj04KtJH2ZaBHdOawfmtwH3nf_PRc&callback=initMap"></script>

    <script src="{{asset('js/map.js')}}" ></script>
</html>
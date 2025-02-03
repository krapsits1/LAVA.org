<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>
    @include('layouts.navbar')
    @include('layouts.lang')
    
    <main style="min-height: 80vh;">
        <div class="container">
            <!-- Page Title -->
            <h1 class="text-center py-4">
                {{ __("messages.about_us_title") }}
            </h1>
            
            <!-- Mission Statement -->
            <p class="lead text-center mb-5">
                {{ __("messages.about_mission") }}
            </p>
            
            <!-- Team Section -->
            <div class="row">
                <!-- Team Member: Dr. Ivars Vegeris -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-img-top" style="width: 100%; height: 300px; overflow: hidden;">
                            <img src="{{ asset('images/about/ivars.jpg') }}" 
                                 alt="{{ __('messages.about_team_ivars_name') }}" 
                                 class="img-fluid rounded-top"
                                 style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">
                                {{ __("messages.about_team_ivars_name") }}
                            </h5>
                            <p class="card-text text-muted">
                                {{ __("messages.about_team_ivars_role") }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Team Member: Linda Frīdenberga -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-img-top" style="width: 100%; height: 300px; overflow: hidden;">
                            <img src="{{ asset('images/about/linda.jpg') }}" 
                                 alt="{{ __('messages.about_team_linda_name') }}" 
                                 class="img-fluid rounded-top"
                                 style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">
                                {{ __("messages.about_team_linda_name") }}
                            </h5>
                            <p class="card-text text-muted">
                                {{ __("messages.about_team_linda_role") }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Team Member: Ieva Zariņa -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-img-top" style="width: 100%; height: 300px; overflow: hidden;">
                            <img src="{{ asset('images/about/ieva.png') }}" 
                                 alt="{{ __('messages.about_team_ieva_name') }}" 
                                 class="img-fluid rounded-top"
                                 style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">
                                {{ __("messages.about_team_ieva_name") }}
                            </h5>
                            <p class="card-text text-muted">
                                {{ __("messages.about_team_ieva_role") }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Repeat Mission Statement (Optional) -->
            <div class="text-center mt-5">
                <h2 class="mb-3">
                    {{ __("messages.about_mission") }}
                </h2>
            </div>
        </div>
    </main>
    
    @include('layouts.footer')
</body>
</html>

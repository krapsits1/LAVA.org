<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
        
</head>
<style>

#faq {
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 40px 20px;
}

#faq h2 {
    font-family: 'Montserrat', sans-serif;
    font-size: 2rem;
    font-weight: bold;
    color: #800020;
}

#faq p {
    font-family: 'Roboto', sans-serif;
    font-size: 1rem;
    line-height: 1.6;
    color: #555;
}

.accordion-button {
    font-family: 'Roboto', sans-serif;
    font-size: 1.1rem;
    font-weight: bold;
    color: #800020;
    background-color: #ffffff;
    border: none;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.accordion-button:focus {
    box-shadow: none;
    outline: none;
    color: #990025;
}

.accordion-button:not(.collapsed) {
    background-color: #800020;
    color: #ffffff;
}

.accordion-body {
    font-family: 'Roboto', sans-serif;
    font-size: 1rem;
    color: #555;
    background-color: #ffffff;
    border: 1px solid #eaeaea;
    border-top: none;
    padding: 20px;
    border-radius: 0 0 5px 5px;
}

</style>
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
            <h2 class="text-center mb-5">
                <span class="fw-bold">{{ __("messages.about_mission") }}</span>{{ __("messages.about_mission2") }}
            </h2>
            
            <!-- Team Section -->
            <div class="row">
                <!-- Team Member: Dr. Ivars Vegeris -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-img-top" style="width: 100%; height: 400px; overflow: hidden;">
                            <img src="{{ asset('images/about/ivars.jpg') }}" 
                                 alt="{{ __('messages.about_team_ivars_name') }}" 
                                 class="img-fluid rounded-top"
                                 style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title">
                                {{ __("messages.about_team_ivars_name") }}{{ __("messages.about_team_ivars_role") }} 
                            </h3>
                            <h5 class="card-text text-muted">
                                {{ __("messages.about_team_ivars_role2") }}
                            </h5>
                        </div>
                    </div>
                </div>

                <!-- Team Member: Linda Frīdenberga -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-img-top" style="width: 100%; height: 400px; overflow: hidden;">
                            <img src="{{ asset('images/about/linda.jpg') }}" 
                                 alt="{{ __('messages.about_team_linda_name') }}" 
                                 class="img-fluid rounded-top"
                                 style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title">
                            {{ __("messages.about_team_linda_name") }} {{ __("messages.about_team_linda_role") }}

                            </h3>
                            <h5 class="card-text text-muted">
                                {{ __("messages.about_team_linda_role2") }}
                            </h5>
                        </div>
                    </div>
                </div>

                <!-- Team Member: Ieva Zariņa -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-img-top" style="width: 100%; height: 400px; overflow: hidden;">
                            <img src="{{ asset('images/about/ieva.png') }}" 
                                 alt="{{ __('messages.about_team_ieva_name') }}" 
                                 class="img-fluid rounded-top"
                                 style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title">
                                {{ __("messages.about_team_ieva_name") }} {{ __("messages.about_team_ieva_role") }}

                            </h3>
                            <h5 class="card-text text-muted">
                                {{ __("messages.about_team_ieva_role2") }}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="faq" class="py-5">
            <div class="container">
                <h2 class="text-center mb-4">{{ __('messages.faq_title') }}</h2>
                <h4 class="text-center mb-5 text-muted">{{ __('messages.faq_description') }}</h4>
                
                <div class="accordion" id="faqAccordion">
                    <!-- FAQ Item 1 -->
                    <div class="accordion-item">
                        <h1 class="accordion-header" id="faqHeading1">
                            <button class="fs-4 accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-controls="faqCollapse1">
                                {{ __('messages.faq_item1_question') }}
                            </button>
                        </h1>
                        <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                            <div class="fs-5 accordion-body">
                                {{ __('messages.faq_item1_answer') }}
                                <br>
                                {{ __('messages.faq_item1_answer2') }}
                                <br>
                                <ol>
                                    <li>{{ __('messages.faq_item1_answer3') }}</li>
                                    <li>{{ __('messages.faq_item1_answer4') }}</li>
                                    <li>{{ __('messages.faq_item1_answer5') }}</li>
                                    <li>{{ __('messages.faq_item1_answer6') }}</li>
                                </ol>
                                {{ __('messages.faq_item1_answer7') }}
                            </div>
                        </div>
                    </div>
        
                    <!-- FAQ Item 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeading2">
                            <button class="fs-4 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                {{ __('messages.faq_item2_question') }}
                            </button>
                        </h2>
                        <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                            <div class="fs-5 accordion-body">
                                {{ __('messages.faq_item2_answer') }}
                                <br>
                                {{ __('messages.faq_item2_answer2') }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
    </main>
    
    @include('layouts.footer')
</body>
</html>

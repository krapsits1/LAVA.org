<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>

<body>
    @include('layouts.navbar')

    @include('layouts.lang')

    <main style="min-height: 80vh;">
        <div class="d-flex flex-column">
            <div class="container mt-5" >
                <div class="row">
                    <!-- Text Column -->
                    <div class="col-md-6 d-flex">
                        <div>
                            <h1>{{ __('messages.lava') }}</h1>
                            <p>{{__('messages.lava_description')}}</p>
                            
                            {{-- Carousel for small screens --}}
                            <div class="d-block d-md-none">
                                <div id="smallScreenCarousel" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('images/slider/Slide1.jpg') }}" class="d-block w-100" alt="Slide 1">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('images/slider/Slide2.jpg') }}" class="d-block w-100" alt="Slide 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('images/slider/Slide3.jpg') }}" class="d-block w-100" alt="Slide 3">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#smallScreenCarousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#smallScreenCarousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>

                            <h1 class="pt-2">{{__('messages.lava_goals')}}</h1>
                            <ul style="list-style: none; padding-left:0;" >
                                <li><i class="bi bi-check-circle" style="color: #800020;"></i> {{__('messages.lava_goals_li_1')}}</li>
                                <li><i class="bi bi-check-circle" style="color: #800020;"></i> {{__('messages.lava_goals_li_2')}}</li>
                                <li><i class="bi bi-check-circle" style="color: #800020;"></i> {{__('messages.lava_goals_li_3')}}</li>
                                <li><i class="bi bi-check-circle" style="color: #800020;"></i> {{__('messages.lava_goals_li_4')}}</li>
                            </ul>
                            

                            {{-- Carousel 2 for small screens --}}
                            <div class="d-block d-md-none">
                                <div id="smallScreenCarousel2" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('images/slider/Slide4.jpg') }}" class="d-block w-100" alt="Slide 4">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('images/slider/Slide5.jpg') }}" class="d-block w-100" alt="Slide 5">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('images/slider/Slide6.jpg') }}" class="d-block w-100" alt="Slide 6">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#smallScreenCarousel2" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#smallScreenCarousel2" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>

                            <h1 class="pt-2">{{__('messages.lava_offer')}}</h1>

                            <ul style="list-style: none; padding-left:0;" >
                                <li><i class="bi bi-check-circle" style="color: #800020;"></i> {{__('messages.lava_offer_li_1')}}</li>
                                <li><i class="bi bi-check-circle" style="color: #800020;"></i> {{__('messages.lava_offer_li_2')}}</li>
                                <li><i class="bi bi-check-circle" style="color: #800020;"></i> {{__('messages.lava_offer_li_3')}}</li>
                                <li><i class="bi bi-check-circle" style="color: #800020;"></i> {{__('messages.lava_offer_li_4')}}</li>
                            </ul>
                            <a href="{{ route('join') }}" class="btn btn-lg text-white" style="background-color: #800020; border-radius: 10px; font-weight: bold; padding: 10px 20px; display: inline-block; text-decoration: none; transition: background-color 0.3s;">
                                {{__('messages.join')}}   
                            </a>
                        </div>
                    </div>
                

                    <!-- Carousel Column -->
                    <div class="pt-2 col-md-6 d-none d-md-flex align-items-start">
                        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('images/slider/Slide1.jpg') }}" class="d-block w-100" alt="Slide 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/slider/Slide2.jpg') }}" class="d-block w-100" alt="Slide 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/slider/Slide3.jpg') }}" class="d-block w-100" alt="Slide 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/slider/Slide4.jpg') }}" class="d-block w-100" alt="Slide 4">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/slider/Slide5.jpg') }}" class="d-block w-100" alt="Slide 5">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/slider/Slide6.jpg') }}" class="d-block w-100" alt="Slide 6">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/slider/Slide7.jpg') }}" class="d-block w-100" alt="Slide 7">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/slider/Slide8.jpg') }}" class="d-block w-100" alt="Slide 8">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/slider/Slide9.jpg') }}" class="d-block w-100" alt="Slide 9">
                                </div>

                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('layouts.footer')
    


</body>
</html>

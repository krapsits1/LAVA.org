<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.head')
        <style>
            body {
                background: linear-gradient(135deg, #fdfdfd, #fafafa);
            }

            .card {
                border-radius: 15px;
                background: linear-gradient(135deg, #ffffff, #f7f7f7);
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            }

            input.form-control, textarea.form-control {
                border: 1px solid #ccc;
                border-radius: 10px;
                padding: 10px;
                font-size: 1rem;
                box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.05);
            }

            input.form-control:focus, textarea.form-control:focus {
                border-color: #800020;
                outline: none;
                box-shadow: 0 0 5px rgba(128, 0, 32, 0.5);
            }

            button.btn {
                background-color: #800020;
                border: none;
                font-weight: bold;
                font-size: 1.2rem;
                padding: 10px 15px;
                border-radius: 10px;
                transition: background-color 0.3s ease, transform 0.2s ease;
            }

            button.btn:hover {
                background-color: #990025;
                transform: scale(1.05);
            }

            .alert-success {
                background-color: #d4edda;
                color: #155724;
                border: 1px solid #c3e6cb;
                border-radius: 10px;
                padding: 10px 15px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }
        </style>
    </head>
    <body>
        @include('layouts.navbar')
        @include('layouts.lang')
        
        <main style="min-height: 80vh;">
            @if(session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>  
            @endif
            <div class="container pt-5" style="padding: 40px 20px;">
                <section id="join-us" class="py-5">
                    <div class="container text-center">
                        <h1 class="mb-4">{{ __('messages.join_lava_title') }}</h1>
                        <p class="lead mb-4">
                            {{ __('messages.join_lava_description') }}
                        </p>
                        
                </section>
                
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="card shadow-lg border-0">
                            <div class="card-body pt-4">
                                <h2 class="text-center mb-4" style="font-weight: bold; font-size: 2rem; color: #800020;">
                                    {{ __('messages.contact_header') }}
                                </h2>
                                <p class="text-center text-muted" style="font-size: 1rem;">
                                    {{ __('messages.contact_subtext') }}
                                </p>
            
                                <form action="{{ route('sendMessage') }}" method="POST">
                                    @csrf
            
                                    <!-- Name -->
                                    <div class="mb-3">
                                        <label for="name" class="form-label">
                                            {{ __('messages.name_label') }}
                                        </label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="bi bi-person-fill"></i>
                                            </span>
                                            <input type="text" class="form-control" id="name" name="name" required placeholder="{{ __('messages.name_placeholder') }}">
                                        </div>
                                    </div>
            
                                    <!-- Email -->
                                    <div class="mb-3">
                                        <label for="email" class="form-label">
                                            {{ __('messages.email_label') }}
                                        </label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="bi bi-envelope-fill"></i>
                                            </span>
                                            <input type="email" class="form-control" id="email" name="email" required placeholder="{{ __('messages.email_placeholder') }}">
                                        </div>
                                    </div>
            
                                    <!-- Subject -->
                                    <div class="mb-3">
                                        <label for="subject" class="form-label">
                                            {{ __('messages.subject_label') }}
                                        </label>
                                        <input type="text" class="form-control" id="subject" name="subject" required placeholder="{{ __('messages.subject_placeholder') }}">
                                    </div>
            
                                    <!-- Message -->
                                    <div class="mb-3">
                                        <label for="message" class="form-label">
                                            {{ __('messages.message_label') }}
                                        </label>
                                        <textarea class="form-control" id="message" name="message" rows="4" required placeholder="{{ __('messages.message_placeholder') }}"></textarea>
                                    </div>
            
                                    <!-- Submit Button -->
                                    <div class="d-grid">
                                        <button type="submit" class="btn text-white btn-lg">
                                            {{ __('messages.submit_button') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </main>
    
        @include('layouts.footer')
    </body>
</html>

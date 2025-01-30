<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.head')
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
            <div class="container pt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="card shadow-lg border-0">
                            <div class="card-body pt-4">
                                <h2 class="text-center mb-4">Uzraksti mums ziņu!</h2>
                                <p class="text-center text-muted">Aizpildiet formu, lai nosūtītu mums ziņu</p>
            
                                <form action="{{route('sendMessage')}}" method="POST">
                                    @csrf
            
                                    <!-- Name -->
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Vārds</label>
                                        <input type="text" class="form-control" id="name" name="name" required placeholder="Ievadiet savu vārdu">
                                    </div>
            
                                    <!-- Email -->
                                    <div class="mb-3">
                                        <label for="email" class="form-label">E-pasts</label>
                                        <input type="email" class="form-control" id="email" name="email" required placeholder="Ievadiet savu e-pastu">
                                    </div>
            
                                    <!-- Subject -->
                                    <div class="mb-3">
                                        <label for="subject" class="form-label">Tēma</label>
                                        <input type="text" class="form-control" id="subject" name="subject" required placeholder="Ziņas tēma">
                                    </div>
            
                                    <!-- Message -->
                                    <div class="mb-3">
                                        <label for="message" class="form-label">Ziņa</label>
                                        <textarea class="form-control" id="message" name="message" rows="4" required placeholder="Ievadiet savu ziņu"></textarea>
                                    </div>
            
                                    <!-- Submit Button -->
                                    <div class="d-grid">
                                        <button type="submit" class="btn text-white btn-lg" style="background-color: #800020; t">
                                            Nosūtīt
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
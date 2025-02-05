<style>
    .text-responsive {
        font-size: clamp(10px, 2vw, 18px) !important;
    }
</style>

<main style="height: 80vh;">
    <div class="justify-content-center pt-5 d-flex align-items-center flex-column">
        <h1>{{ __("messages.coming_soon") }}</h1>
        <p class="text-responsive fs-4">
            {{ __("messages.coming_soon_text") }}
        </p>
        
        <a type="button" href="{{ route('welcome') }}" class="btn btn-secondary">
            {{ __("messages.go_to_homepage") }}
        </a>
    </div>
</main>
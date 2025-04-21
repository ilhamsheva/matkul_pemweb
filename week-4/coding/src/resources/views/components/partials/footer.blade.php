@php
    // Tambahkan model
    use App\Models\Footer;

    // Tambahkan footer
    $footer = Footer::first();
@endphp

<footer id="footer" class="footer">
    <div class="container">
        <div class="social-links d-flex justify-content-center">
            <a href="#"><i class="bi bi-twitter-x"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
        </div>
        <br>
        
        <div class="copyright text-center">
            <a wire:navigate href="{{route('home')}}">{{$footer->footer ?? ''}}</a>
        </div>
    </div>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
</footer>
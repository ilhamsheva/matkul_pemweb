@php
    // Tambahkan model
    use App\Models\Logo;

    // Tambahkan footer
    $logo = Logo::first();
@endphp

<header id="header" class="header d-flex align-items-center sticky-top">
    <div
        class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        
        {{-- Saya mau menambah logo --}}
        <div class="logo">
            <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                <img src="{{ $logo->image ?? '' }}" alt="">
                <h1 class="ms-3" style="font-size: 20px">{{ $logo->title ?? '' }}</h1>
            </a>
        </div>
        
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}" class="active-info">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('skills') }}">Skills</a></li>
                <li><a href="{{ route('resume') }}">Resume</a></li>
                <li><a href="{{ route('portofolio') }}">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

</header>

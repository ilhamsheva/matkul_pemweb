@php
    use App\Models\Logo;
    $logo = Logo::first();
@endphp

<!-- navigation -->
<header class="navigation bg-tertiary">
	<nav class="navbar navbar-expand-xl navbar-light text-center py-3">
		<div class="container">
			<a class="navbar-brand" href="{{ route('home') }}">
				<img loading="prelaod" decoding="async" class="img-fluid" width="50" src="{{ $logo->image }}" alt="Wallet"> 
			</a>
            <h1 class="ms-3" style="font-size: 20px">{{ $logo->title ?? '' }}</h1>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav m-auto mb-2 mb-lg-0">
					<li class="nav-item"> <a class="nav-link" href="{{ route('home') }}">Home</a></li>
					<li class="nav-item"> <a class="nav-link" href="{{ route('about') }}">About</a></li>
					<li class="nav-item"><a href="{{ route('team') }}" class="nav-link">Team</a></li>
                    <li class="nav-item "> <a class="nav-link" href="services.html">Services</a></li>
				</ul>
				<a href="#!" class="btn btn-outline-primary">Contact Us</a>				
			</div>
		</div>
	</nav>
</header>
<!-- /navigation -->
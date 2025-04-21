@php
    use App\Models\Service;
    $services = Service::all();
@endphp

<main>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="section-title pt-4">
                        <p class="text-primary text-uppercase fw-bold mb-3">Our Services</p>
                        {{-- Menampilkan title dan title-desc dari service pertama --}}
                        @if ($services->count() > 0)
                            <h1>{{ $services->first()->title ?? '' }}</h1>
                            <p>{{ $services->first()->title_desc ?? '' }}</p>
                        @endif
                    </div>
                </div>

                {{-- Looping untuk menampilkan setiap service --}}
                @foreach ($services as $index => $service)
                    <div class="col-lg-4 col-md-6 service-item">
                        <a class="text-black" href="service-details.html">
                            <div class="block">
                                {{-- Menampilkan gambar dengan ukuran yang disesuaikan --}}
                                <img src="{{ $service->image_service }}" alt="{{ $service->service }}" class="colored-box mb-4">
                                <h3 class="mb-3 service-title">{{ $service->service ?? '' }}</h3>
                                <p class="mb-0 service-description">{{ $service->service_desc ?? '' }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
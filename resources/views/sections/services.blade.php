<!--Start Service Style1-->
@php
    // Fetch services from database (same as projects)
    $services = App\Models\Service::published()->ordered()->take(6)->get();
@endphp

<section class="services-style1-area" id="services">
    <div class="container">
        <div class="sec-title text-center">
            <div class="sec-title__shape">
                <img src="{{ asset('assets/images/shapes/sec-title-shape-1.png') }}" alt="Decorative shape">
            </div>
            <h2>Our Services</h2>
            <p>Professional solutions for your business needs</p>
        </div>
        
        @if($services->count() > 0)
        <div class="row">
            @foreach($services as $service)
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-service-style1" 
                     onclick="window.location.href='{{ route('service.show', $service->id) }}'"
                     style="border-top-color: #3498db;">
                    <div class="img-holder">
                        @if($service->image)
                        <img src="{{ Storage::url($service->image) }}" 
                             alt="{{ $service->title }}">
                        @else
                        <img src="{{ asset('assets/images/default-service.jpg') }}" 
                             alt="{{ $service->title }}">
                        @endif
                        <div class="icon-holder">
                            @if($service->icon)
                                <i class="{{ $service->icon }}" style="color: #3498db;"></i>
                            @else
                                <i class="fas fa-cog" style="color: #3498db;"></i>
                            @endif
                        </div>
                    </div>
                    <div class="text-holder">
                        <h3><a href="{{ route('service.show', $service->id) }}">{{ $service->title }}</a></h3>
                        <p>{{ \Illuminate\Support\Str::limit($service->description, 100) }}</p>
                        <div class="read-more-button">
                            <a href="{{ route('service.show', $service->id) }}">
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="service-view-all text-center">
            <a href="{{ route('home') }}#services" class="btn-one">
                <span class="txt">
                    View All Services
                    <i class="fas fa-plus"></i>
                </span>
            </a>
        </div>
        @else
        <div class="text-center py-5">
            <p>No services available yet. Add services from the admin panel.</p>
        </div>
        @endif
    </div>
</section>
<!--End Service Style1-->
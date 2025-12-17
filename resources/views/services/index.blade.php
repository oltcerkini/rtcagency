@extends('layouts.app')

@section('title', 'Our Services | RTC Agency')

@section('content')
<!-- Services Hero -->
<section class="page-hero" style="background: linear-gradient(135deg, #1a6ae3 0%, #0d4ca3 100%);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center text-white">
                <h1 class="display-4 fw-bold mb-3">Our Services</h1>
                <p class="lead mb-4">Comprehensive solutions for all your business needs</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="services-grid py-5">
    <div class="container">
        @if($featuredServices->count() > 0)
        <!-- Featured Services -->
        <div class="featured-services mb-5">
            <h2 class="text-center mb-5">Featured Services</h2>
            <div class="row g-4">
                @foreach($featuredServices as $service)
                <div class="col-lg-4">
                    <div class="featured-service-card" style="border-color: {{ $service->color }};">
                        <div class="featured-icon">
                            @if($service->icon_class)
                            <i class="{{ $service->icon_class }} fa-2x" style="color: {{ $service->color }};"></i>
                            @endif
                        </div>
                        <h3>{{ $service->title }}</h3>
                        <p>{{ \Illuminate\Support\Str::limit($service->description, 150) }}</p>
                        <a href="{{ route('service.show', $service->id) }}" class="featured-service-link">
                            Learn More <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
        
        <!-- All Services -->
        <div class="all-services">
            <h2 class="text-center mb-5">All Services</h2>
            <div class="row g-4">
                @foreach($services as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="service-card" onclick="window.location.href='{{ route('service.show', $service->id) }}'">
                        <div class="service-image">
                            <img src="{{ Storage::url($service->featured_image) }}" 
                                 alt="{{ $service->title }}"
                                 class="img-fluid">
                            <div class="service-overlay" style="background: {{ $service->color }}cc;">
                                <a href="{{ route('service.show', $service->id) }}" class="view-service-btn">
                                    View Details
                                </a>
                            </div>
                        </div>
                        <div class="service-content">
                            <div class="service-icon">
                                @if($service->icon_class)
                                <i class="{{ $service->icon_class }}" style="color: {{ $service->color }};"></i>
                                @endif
                            </div>
                            <h4>{{ $service->title }}</h4>
                            <p>{{ \Illuminate\Support\Str::limit($service->description, 100) }}</p>
                            <a href="{{ route('service.show', $service->id) }}" class="read-more">
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- Pagination -->
            @if($services->hasPages())
            <div class="pagination-wrapper mt-5">
                {{ $services->links() }}
            </div>
            @endif
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section py-5" style="background: #f8f9fa;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="mb-3">Need a Custom Solution?</h2>
                <p class="mb-0">Contact us to discuss your specific requirements</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">
                    <i class="fas fa-envelope me-2"></i> Get In Touch
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    .page-hero {
        padding: 100px 0;
        position: relative;
        overflow: hidden;
    }
    
    .featured-service-card {
        background: white;
        border-radius: 10px;
        padding: 30px;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        border-top: 4px solid #3498db;
        height: 100%;
        transition: transform 0.3s ease;
    }
    
    .featured-service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }
    
    .featured-icon {
        width: 80px;
        height: 80px;
        background: #f8f9fa;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
    }
    
    .featured-service-card h3 {
        margin-bottom: 15px;
        color: #2c3e50;
    }
    
    .featured-service-card p {
        color: #666;
        line-height: 1.6;
        margin-bottom: 20px;
    }
    
    .featured-service-link {
        color: #3498db;
        text-decoration: none;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: gap 0.3s;
    }
    
    .featured-service-link:hover {
        gap: 12px;
    }
    
    .service-card {
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease;
        height: 100%;
        cursor: pointer;
    }
    
    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }
    
    .service-image {
        position: relative;
        height: 200px;
        overflow: hidden;
    }
    
    .service-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .service-card:hover .service-image img {
        transform: scale(1.05);
    }
    
    .service-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .service-card:hover .service-overlay {
        opacity: 1;
    }
    
    .view-service-btn {
        background: white;
        color: #2c3e50;
        padding: 10px 25px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 500;
        transition: transform 0.3s;
    }
    
    .view-service-btn:hover {
        transform: scale(1.05);
    }
    
    .service-content {
        padding: 25px;
        position: relative;
    }
    
    .service-icon {
        position: absolute;
        top: -25px;
        right: 25px;
        width: 50px;
        height: 50px;
        background: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    }
    
    .service-icon i {
        font-size: 24px;
    }
    
    .service-content h4 {
        margin-bottom: 10px;
        color: #2c3e50;
    }
    
    .service-content p {
        color: #666;
        line-height: 1.6;
        margin-bottom: 15px;
    }
    
    .read-more {
        color: #3498db;
        text-decoration: none;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        transition: gap 0.3s;
    }
    
    .read-more:hover {
        gap: 10px;
    }
    
    .pagination-wrapper .pagination {
        justify-content: center;
    }
    
    .pagination-wrapper .page-link {
        border-radius: 5px;
        margin: 0 3px;
    }
    
    @media (max-width: 991px) {
        .page-hero {
            padding: 80px 0;
        }
    }
    
    @media (max-width: 767px) {
        .page-hero {
            padding: 60px 0;
        }
        
        .page-hero h1 {
            font-size: 2.5rem;
        }
        
        .featured-service-card,
        .service-card {
            margin-bottom: 30px;
        }
    }
</style>
@endsection
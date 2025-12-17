@extends('layouts.app')

@section('title', $service->title . ' | RTC Agency')

@section('content')
<!-- Page Header Section -->
<section class="page-header-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 text-center">
                <h1 class="display-4 fw-bold mb-3">{{ $service->title }}</h1>
                @if($service->description)
                <p class="lead mb-4">{{ $service->description }}</p>
                @endif
                
                @if($service->icon)
                <div class="service-icon-large mb-4">
                    <i class="{{ $service->icon }} fa-3x" style="color: #3498db;"></i>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- Service Details Section -->
<section class="service-details py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-content">
                    @if($service->image)
                    <div class="mb-5">
                        <img src="{{ Storage::url($service->image) }}" 
                             alt="{{ $service->title }}" 
                             class="img-fluid rounded shadow">
                    </div>
                    @endif
                    
                    <div class="description mb-5">
                        {!! $service->content ?? $service->description !!}
                    </div>
                    
                    <!-- CTA Section -->
                    <div class="cta-section bg-light p-5 rounded text-center">
                        <h3 class="mb-3">Need This Service?</h3>
                        <p class="mb-4">Contact us today to discuss your requirements</p>
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">
                            <i class="fas fa-phone me-2"></i> Contact Us Now
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="service-sidebar">
                    <!-- Service Info Card -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Service Details</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex justify-content-between py-2 border-bottom">
                                    <strong>Status:</strong>
                                    <span class="{{ $service->is_active ? 'text-success' : 'text-danger' }}">
                                        {{ $service->is_active ? 'Available' : 'Not Available' }}
                                    </span>
                                </li>
                                <li class="d-flex justify-content-between py-2 border-bottom">
                                    <strong>Featured:</strong>
                                    <span>{{ $service->featured ? 'Yes' : 'No' }}</span>
                                </li>
                                <li class="d-flex justify-content-between py-2">
                                    <strong>Priority:</strong>
                                    <span>{{ $service->sort_order }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Quick Contact -->
                    <div class="card border-0 shadow-sm" style="border-left: 4px solid #3498db;">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Have Questions?</h5>
                            <p class="card-text mb-3">Get in touch with our team</p>
                            <a href="{{ route('contact') }}" class="btn btn-outline-primary w-100">
                                <i class="fas fa-envelope me-2"></i> Contact Support
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .page-header-section {
        background: linear-gradient(135deg, #1a6ae3 0%, #0d4ca3 100%);
        color: white;
        padding: 100px 0;
        position: relative;
        overflow: hidden;
    }
    
    .service-icon-large {
        width: 80px;
        height: 80px;
        background: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    
    .service-content .description {
        line-height: 1.8;
        color: #555;
    }
    
    .service-content .description p {
        margin-bottom: 1.5rem;
    }
    
    .cta-section {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    }
</style>
@endsection
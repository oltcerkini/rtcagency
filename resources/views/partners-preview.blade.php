@extends('layouts.app')

@section('title', 'Our Partners | RTC Agency')

@section('content')
    <!-- Partners Preview Section -->
    <section class="partners-preview py-5">
        <div class="container">
            <div class="sec-title text-center mb-5">
                <div class="sec-title__shape item-center mb-3">
                    <img src="{{ asset('assets/images/shapes/sec-title-shape-1.png') }}" alt="Decorative shape">
                </div>
                <h2>Our Partnership with DIV</h2>
                <p class="lead">Discover how we transform businesses through innovative digital solutions</p>
            </div>
            
            <!-- Show 3 case studies preview -->
            <div class="row">
                <!-- Case Study 1 Preview -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="partner-preview-card">
                        <div class="preview-img-holder">
                            <img src="{{ asset('assets/images/kos1.jpg') }}" alt="EcoKos Project" class="img-fluid">
                            <div class="preview-overlay">
                                <span class="preview-badge">01</span>
                            </div>
                        </div>
                        <div class="preview-content p-4">
                            <div class="preview-category mb-2">EcoKos</div>
                            <h4 class="preview-title">Intelligent Waste Management</h4>
                            <p class="preview-text">Digital platform for Kosovo's leading environmental company.</p>
                            <a href="{{ route('projects') }}" class="preview-link">
                                Read Full Case <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Case Study 2 Preview -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="partner-preview-card">
                        <div class="preview-img-holder">
                            <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="E-commerce" class="img-fluid">
                            <div class="preview-overlay">
                                <span class="preview-badge">02</span>
                            </div>
                        </div>
                        <div class="preview-content p-4">
                            <div class="preview-category mb-2">Software Solutions</div>
                            <h4 class="preview-title">E-commerce Integration</h4>
                            <p class="preview-text">Seamless integration with existing business systems.</p>
                            <a href="{{ route('projects') }}" class="preview-link">
                                Read Full Case <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Case Study 3 Preview -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="partner-preview-card">
                        <div class="preview-img-holder">
                            <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Mobile Apps" class="img-fluid">
                            <div class="preview-overlay">
                                <span class="preview-badge">03</span>
                            </div>
                        </div>
                        <div class="preview-content p-4">
                            <div class="preview-category mb-2">Software Solutions</div>
                            <h4 class="preview-title">Cross-platform Apps</h4>
                            <p class="preview-text">Framework-based mobile applications development.</p>
                            <a href="{{ route('projects') }}" class="preview-link">
                                Read Full Case <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- View All Button -->
            <div class="text-center mt-5">
                <a href="{{ route('projects') }}" class="btn-one">
                    <span class="txt">
                        View All Case Studies
                        <i class="fas fa-plus ms-2"></i>
                    </span>
                </a>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    .partners-preview {
        background-color: #f9fbfe;
        position: relative;
    }
    
    .partner-preview-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        height: 100%;
    }
    
    .partner-preview-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }
    
    .preview-img-holder {
        position: relative;
        height: 200px;
        overflow: hidden;
    }
    
    .preview-img-holder img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .partner-preview-card:hover .preview-img-holder img {
        transform: scale(1.05);
    }
    
    .preview-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to bottom, transparent 60%, rgba(0,0,0,0.4));
    }
    
    .preview-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        width: 40px;
        height: 40px;
        background: #3498db;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 1rem;
    }
    
    .preview-content {
        padding: 25px;
    }
    
    .preview-category {
        color: #3498db;
        font-size: 0.85rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .preview-title {
        font-size: 1.2rem;
        color: #2c3e50;
        margin-bottom: 10px;
        line-height: 1.4;
    }
    
    .preview-text {
        color: #666;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 15px;
    }
    
    .preview-link {
        color: #3498db;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.9rem;
        display: inline-flex;
        align-items: center;
        transition: color 0.3s ease;
    }
    
    .preview-link:hover {
        color: #2980b9;
    }
    
    .btn-one {
        display: inline-block;
        background: #3498db;
        color: white;
        padding: 14px 30px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
    }
    
    .btn-one:hover {
        background: #2980b9;
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(52, 152, 219, 0.4);
        color: white;
    }
    
    .btn-one .txt {
        display: flex;
        align-items: center;
    }
    
    .btn-one i {
        font-size: 0.9rem;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .preview-img-holder {
            height: 180px;
        }
        
        .preview-content {
            padding: 20px;
        }
    }
</style>
@endpush
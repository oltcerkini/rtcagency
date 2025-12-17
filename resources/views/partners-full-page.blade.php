@extends('layouts.app')

@section('title', 'Our Partners | RTC Agency')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-content">
                        <h1 class="page-title">Our Partners</h1>
                        <p class="page-subtitle">Discover successful collaborations and innovative solutions</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Partner -->
    <section class="partner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="partner-image">
                        <div class="main-image">
                            <img src="{{ asset('assets/images/kos1.jpg') }}" alt="EcoKos Project">
                        </div>
                        <div class="logo-image">
                            <img src="{{ asset('assets/images/logodiv.jpg') }}" alt="DIV Logo">
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="partner-content">
                        <h2>EcoKos</h2>
                        <p>
                            EcoKos is the first and only licensed company in Kosovo for the collection, storage, and processing of used cooking oil (UCO). With a large operational network that serves over 1,200 clients across the country—including restaurants, hotels, and major businesses—EcoKos plays a vital role in environmental protection by ensuring the safe and sustainable treatment of oil waste.
                        </p>
                        
                        <div class="partner-points">
                            <div class="point-item">
                                <div class="point-icon">📋</div>
                                <div class="point-content">
                                    <h4>Challenge & Solution</h4>
                                    <p>This application provides full operational control over collection routes, depot management, oil processing, and export documentation.</p>
                                </div>
                            </div>
                            
                            <div class="point-item">
                                <div class="point-icon">✅</div>
                                <div class="point-content">
                                    <h4>Final Result</h4>
                                    <p>The final platform transformed EcoKos' operations by automating nearly all core processes. Real-time data collection and analysis replaced outdated manual methods.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies -->
    <section class="case-studies">
        <div class="container">
            <div class="section-title">
                <h2>Our Partnership with DIV</h2>
            </div>
            
            <div class="cases-grid">
                <!-- Case 1 -->
                <div class="case-card">
                    <div class="case-image">
                        <img src="{{ asset('assets/images/kos1.jpg') }}" alt="EcoKos Waste Management">
                        <div class="case-number">01</div>
                    </div>
                    <div class="case-content">
                        <div class="case-category">EcoKos</div>
                        <h3><a href="{{ route('projects') }}">Intelligent Waste Oil Collection & Management System</a></h3>
                        <a href="{{ route('projects') }}" class="case-link">View Details →</a>
                    </div>
                </div>
                
                <!-- Case 2 -->
                <div class="case-card">
                    <div class="case-image">
                        <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="E-commerce Integration">
                        <div class="case-number">02</div>
                    </div>
                    <div class="case-content">
                        <div class="case-category">Software Solutions</div>
                        <h3><a href="{{ route('projects') }}">Integrating DIV's e-commerce solutions</a></h3>
                        <a href="{{ route('projects') }}" class="case-link">View Details →</a>
                    </div>
                </div>
                
                <!-- Case 3 -->
                <div class="case-card">
                    <div class="case-image">
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Mobile Apps">
                        <div class="case-number">03</div>
                    </div>
                    <div class="case-content">
                        <div class="case-category">Software Solutions</div>
                        <h3><a href="{{ route('projects') }}">Cross-platform mobile applications</a></h3>
                        <a href="{{ route('projects') }}" class="case-link">View Details →</a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="{{ route('projects') }}" class="btn-primary">
                    View More Cases
                </a>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    /* Page Header */
    .page-header {
        background: linear-gradient(135deg, #1a6ae3 0%, #0d4ca3 100%);
        color: white;
        padding: 80px 0;
        text-align: center;
    }
    
    .page-title {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 15px;
    }
    
    .page-subtitle {
        font-size: 1.2rem;
        opacity: 0.9;
    }
    
    /* Partner Section */
    .partner-section {
        padding: 80px 0;
        background: #f8f9fa;
    }
    
    .partner-image {
        position: relative;
    }
    
    .main-image img {
        width: 100%;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .logo-image {
        position: absolute;
        bottom: -20px;
        right: -20px;
        background: white;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .logo-image img {
        width: 80px;
        height: auto;
    }
    
    .partner-content h2 {
        font-size: 2.2rem;
        margin-bottom: 20px;
        color: #333;
    }
    
    .partner-content p {
        font-size: 1.1rem;
        line-height: 1.6;
        color: #666;
        margin-bottom: 30px;
    }
    
    .partner-points {
        margin-top: 30px;
    }
    
    .point-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 25px;
    }
    
    .point-icon {
        font-size: 24px;
        margin-right: 15px;
        min-width: 40px;
    }
    
    .point-content h4 {
        font-size: 1.2rem;
        margin-bottom: 8px;
        color: #333;
    }
    
    .point-content p {
        font-size: 1rem;
        color: #666;
        margin-bottom: 0;
    }
    
    /* Case Studies */
    .case-studies {
        padding: 80px 0;
    }
    
    .section-title {
        text-align: center;
        margin-bottom: 50px;
    }
    
    .section-title h2 {
        font-size: 2.2rem;
        color: #333;
        position: relative;
        display: inline-block;
        padding-bottom: 15px;
    }
    
    .section-title h2:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background: #1a6ae3;
    }
    
    .cases-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }
    
    .case-card {
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }
    
    .case-card:hover {
        transform: translateY(-10px);
    }
    
    .case-image {
        position: relative;
        height: 200px;
        overflow: hidden;
    }
    
    .case-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    
    .case-card:hover .case-image img {
        transform: scale(1.05);
    }
    
    .case-number {
        position: absolute;
        top: 15px;
        right: 15px;
        background: #1a6ae3;
        color: white;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 1.2rem;
    }
    
    .case-content {
        padding: 20px;
    }
    
    .case-category {
        color: #1a6ae3;
        font-weight: 600;
        font-size: 0.9rem;
        text-transform: uppercase;
        margin-bottom: 10px;
        letter-spacing: 1px;
    }
    
    .case-content h3 {
        font-size: 1.3rem;
        margin-bottom: 15px;
        line-height: 1.4;
    }
    
    .case-content h3 a {
        color: #333;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    
    .case-content h3 a:hover {
        color: #1a6ae3;
    }
    
    .case-link {
        color: #1a6ae3;
        text-decoration: none;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        transition: transform 0.3s ease;
    }
    
    .case-link:hover {
        transform: translateX(5px);
    }
    
    .btn-primary {
        display: inline-block;
        background: #1a6ae3;
        color: white;
        padding: 12px 30px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
    }
    
    .btn-primary:hover {
        background: #0d4ca3;
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(13, 76, 163, 0.3);
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .page-title {
            font-size: 2rem;
        }
        
        .partner-section,
        .case-studies {
            padding: 60px 0;
        }
        
        .partner-content h2 {
            font-size: 1.8rem;
        }
        
        .section-title h2 {
            font-size: 1.8rem;
        }
        
        .cases-grid {
            grid-template-columns: 1fr;
        }
        
        .logo-image {
            position: relative;
            bottom: 0;
            right: 0;
            margin-top: 20px;
            display: inline-block;
        }
    }
    
    @media (max-width: 576px) {
        .page-title {
            font-size: 1.8rem;
        }
        
        .page-header {
            padding: 60px 0;
        }
        
        .partner-content h2 {
            font-size: 1.6rem;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    // Simple hover effect for case cards
    document.addEventListener('DOMContentLoaded', function() {
        const caseCards = document.querySelectorAll('.case-card');
        
        caseCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
        
        // Add click event to cards
        caseCards.forEach(card => {
            card.addEventListener('click', function() {
                const link = this.querySelector('h3 a');
                if (link) {
                    window.location.href = link.href;
                }
            });
        });
    });
</script>
@endpush
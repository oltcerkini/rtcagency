@extends('layouts.app')

@section('title', $project->title . ' | RTC Agency')

@section('content')
<!-- Project Hero Section -->
<section class="project-hero" 
         style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                url('{{ Storage::url($project->image_1) }}');
                background-size: cover;
                background-position: center;
                padding: 120px 0 80px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center text-white">
                <nav class="breadcrumb-nav mb-4">
                    <a href="{{ route('home') }}" class="text-white-50 me-2">Home</a>
                    <span class="text-white-50 me-2">/</span>
                    <span class="text-white">{{ $project->category }}</span>
                </nav>
                <h1 class="display-4 fw-bold mb-3">{{ $project->title }}</h1>
                <p class="lead mb-4">{{ $project->slogan }}</p>
                <span class="badge bg-primary px-3 py-2 fs-6">{{ $project->category }}</span>
            </div>
        </div>
    </div>
</section>

<!-- Project Details Section -->
<section class="project-details py-5">
    <div class="container">
        <div class="row">
            <!-- Project Images -->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="project-gallery">
                    <div class="main-image mb-4">
                        <img src="{{ Storage::url($project->image_1) }}" 
                             alt="{{ $project->title }}" 
                             class="img-fluid rounded shadow">
                    </div>
                    <div class="secondary-image">
                        <img src="{{ Storage::url($project->image_2) }}" 
                             alt="{{ $project->title }} - Additional" 
                             class="img-fluid rounded shadow">
                    </div>
                </div>
            </div>
            
            <!-- Project Content -->
            <div class="col-lg-6">
                <div class="project-content">
                    <h2 class="h3 mb-4">Project Overview</h2>
                    <div class="description mb-5">
                        {!! $project->description !!}
                    </div>
                    
                    <!-- Project Meta -->
                    <div class="project-meta bg-light p-4 rounded">
                        <h4 class="h5 mb-3">Project Details</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <strong>Category:</strong> 
                                <span class="badge bg-primary ms-2">{{ $project->category }}</span>
                            </li>
                           
                        </ul>
                    </div>
                    
                    <!-- Back Button -->
                    <div class="mt-5">
                        <a href="{{ route('home') }}#projects" class="btn btn-outline-primary">
                            <i class="fas fa-arrow-left me-2"></i> Back to Projects
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Projects (Optional) -->
@php
    $relatedProjects = \App\Models\Project::published()
        ->where('id', '!=', $project->id)
        ->where('category', $project->category)
        ->take(2)
        ->get();
@endphp

@if($relatedProjects->count() > 0)
<section class="related-projects bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-5">Related Projects</h2>
        <div class="row">
            @foreach($relatedProjects as $related)
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ Storage::url($related->image_1) }}" 
                         class="card-img-top" 
                         alt="{{ $related->title }}"
                         style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">{{ $related->category }}</span>
                        <h5 class="card-title">{{ $related->title }}</h5>
                        <p class="card-text text-muted">{{ \Illuminate\Support\Str::limit($related->slogan, 100) }}</p>
                        <a href="{{ route('project.show', $related->id) }}" class="btn btn-sm btn-primary">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<style>
    .project-hero {
        position: relative;
    }
    
    .breadcrumb-nav a {
        text-decoration: none;
        transition: color 0.3s;
    }
    
    .breadcrumb-nav a:hover {
        color: white !important;
    }
    
    .project-gallery img {
        transition: transform 0.3s;
    }
    
    .project-gallery img:hover {
        transform: scale(1.02);
    }
    
    .description {
        line-height: 1.8;
        color: #555;
    }
    
    .description p {
        margin-bottom: 1.5rem;
    }
    
    .description ul, .description ol {
        padding-left: 1.5rem;
        margin-bottom: 1.5rem;
    }
    
    .description li {
        margin-bottom: 0.5rem;
    }
    
    .project-meta li {
        padding: 8px 0;
        border-bottom: 1px solid #dee2e6;
    }
    
    .project-meta li:last-child {
        border-bottom: none;
    }
    
    .related-projects .card {
        transition: transform 0.3s;
    }
    
    .related-projects .card:hover {
        transform: translateY(-5px);
    }
</style>
@endsection
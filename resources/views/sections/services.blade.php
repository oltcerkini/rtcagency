<!--Start Services Style1-->
@php
    // Fetch services from database (same as projects)
    $services = App\Models\Service::published()->ordered()->take(6)->get();
@endphp

<section class="services-style1-area" id="services">
    <div class="container">
        <!-- Section Title -->
        <div class="sec-title text-center">
            <div class="sec-title__shape wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                <img class="float-bob-y" src="{{ asset('assets/images/shapes/sec-title-shape-1.png') }}" alt="Decorative shape">
            </div>
            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                @if(session('locale') === 'de')
                    Unsere Dienstleistungen
                @elseif(session('locale') === 'fr')
                    Nos Services
                @else
                    Our Services
                @endif
            </h2>
            <p class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                @if(session('locale') === 'de')
                    Professionelle Lösungen für Ihre Geschäftsanforderungen
                @elseif(session('locale') === 'fr')
                    Solutions professionnelles pour vos besoins commerciaux
                @else
                    Professional solutions for your business needs
                @endif
            </p>
        </div>

        @if($services->count() > 0)
        <div class="row">
            @foreach($services as $index => $service)
            <!--Start Single Service Style1-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" 
                 data-wow-delay="{{ ($index + 1) * 100 }}ms"
                 data-wow-duration="1500ms">
                <div class="single-service-style1 h-100">
                    <div class="single-service-style1__bg"
                        style="background-image: url({{ asset('assets/images/shapes/service-style1-shape-1.png') }});">
                    </div>
                    <div class="icon-box">
                        @if($service->icon)
                        <span class="{{ $service->icon }}"></span>
                        @else
                        <span class="icon-consulting"></span>
                        @endif
                        <div class="round-box"></div>
                    </div>
                    <div class="title-box">
                        <h3><a href="{{ route('service.show', $service->id) }}">{{ $service->translated_title }}</a></h3>
                    </div>
                    <div class="text">
                        <p>{{ \Illuminate\Support\Str::limit($service->translated_description, 120) }}</p>
                    </div>
                    <div class="btn-box mt-3">
                        <a href="{{ route('service.show', $service->id) }}"><i class="icon-plus"></i></a>
                    </div>
                </div>
            </div>
            <!--End Single Service Style1-->
            @endforeach
        </div>

        <!-- View All Button -->
        <div class="service-view-all text-center wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1500ms">
            <a href="{{ route('home') }}#services" class="btn-one">
                <span class="txt">
                    @if(session('locale') === 'de')
                        Alle Dienstleistungen anzeigen
                    @elseif(session('locale') === 'fr')
                        Voir tous les services
                    @else
                        View All Services
                    @endif
                    <i class="fas fa-plus"></i>
                </span>
            </a>
        </div>
        @else
        <!-- No Services Message -->
        <div class="text-center py-5 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
            <p>
                @if(session('locale') === 'de')
                    Noch keine Dienstleistungen verfügbar. Fügen Sie Dienstleistungen vom Admin-Panel hinzu.
                @elseif(session('locale') === 'fr')
                    Aucun service disponible pour le moment. Ajoutez des services depuis le panneau d'administration.
                @else
                    No services available yet. Add services from the admin panel.
                @endif
            </p>
        </div>
        @endif
    </div>
</section>
<!--End Services Style1-->
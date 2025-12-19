<!--Start About style1-->
@php
    $aboutUs = \App\Models\AboutUs::where('is_active', true)->orderBy('sort_order')->first();
@endphp

<section class="about-style1" id="about-us">
    <div class="about-style1__shape1 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
        <img class="float-bob-y" src="{{ asset('assets/images/shapes/about-style-1-shape-1.png') }}" alt="">
    </div>
    <div class="about-style1__shape2 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
        <img class="float-bob-x" src="{{ asset('assets/images/shapes/about-style-1-shape-3.png') }}" alt="">
    </div>
    <div class="container">
        <div class="row">

            <div class="col-xl-6">
                <div class="about-style1__img">
                    <div class="about-style1__shape3">
                        <img class="float-bob-y" src="{{ asset('assets/images/shapes/about-style-1-shape-2.png') }}" alt="">
                    </div>

                    <div class="main-img-box">
                        @if($aboutUs && $aboutUs->image1)
                            <img src="{{ Storage::url($aboutUs->image1) }}" alt="{{ $aboutUs->translated_title ?? 'About Us' }}">
                        @else
                            <img src="{{ asset('assets/images/shakehands.jpg') }}" alt="About Us">
                        @endif
                    </div>
                    <div class="overlay-img-box">
                        @if($aboutUs && $aboutUs->image2)
                            <img src="{{ Storage::url($aboutUs->image2) }}" alt="{{ $aboutUs->translated_title ?? 'About Us' }}">
                        @else
                            <img src="{{ asset('assets/images/agent.jpg') }}" alt="About Us">
                        @endif
                        <div class="shape">
                            <img src="{{ asset('assets/images/logo-black.png') }}" alt="">
                        </div><!-- /.shape -->
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="about-style1__content">
                    <div class="top-title">
                        <h2>
                            @if($aboutUs && $aboutUs->translated_title)
                                {{ $aboutUs->translated_title }}
                            @else
                                @if(session('locale') === 'de')
                                    Lernen Sie uns kennen
                                @elseif(session('locale') === 'fr')
                                    Apprenez à nous connaître
                                @else
                                    Get to Know About Us
                                @endif
                            @endif
                        </h2>
                    </div>
                    <div class="top-text">
                        <h3>
                            @if($aboutUs && $aboutUs->translated_description1)
                                {!! $aboutUs->translated_description1 !!}
                            @else
                                @if(session('locale') === 'de')
                                    Wir sind ein mehrsprachiger Dienstleister, spezialisiert auf professionelle Übersetzung, Bearbeitung, Korrekturlesen, TEP (Translation–Editing–Proofreading) und spezialisierte Call-Center-Unterstützung. Unsere Mission ist es, hochwertige sprachliche und operative Lösungen für eine Vielzahl von Branchen bereitzustellen und dabei Genauigkeit, kulturelle Relevanz und außergewöhnlichen Kundenservice zu gewährleisten.
                                @elseif(session('locale') === 'fr')
                                    Nous sommes un prestataire de services multilingue spécialisé dans la traduction professionnelle, l'édition, la relecture, le workflow TEP (Traduction–Édition–Relecture) et le support spécialisé de centre d'appels. Notre mission est de fournir des solutions linguistiques et opérationnelles de haute qualité dans un large éventail d'industries, en garantissant précision, pertinence culturelle et service client exceptionnel.
                                @else
                                    We are a multilingual service provider specializing in professional translation, editing, proofreading, TEP (Translation–Editing–Proofreading), and specialized call-center support. Our mission is to deliver high-quality linguistic and operational solutions across a wide range of industries, ensuring accuracy, cultural relevance, and exceptional customer care.
                                @endif
                            @endif
                        </h3>
                    </div>
                    <div class="text">
                        <p>
                            @if($aboutUs && $aboutUs->translated_description2)
                                {!! $aboutUs->translated_description2 !!}
                            @else
                                @if(session('locale') === 'de')
                                    Unser Team besteht aus zertifizierten Übersetzern, Fachexperten, muttersprachlichen Linguisten, geschulten Call-Center-Mitarbeitern und qualifizierten technischen Spezialisten. Egal, ob Sie in neue Märkte expandieren, globale Produkte einführen oder großvolumige Kommunikationsoperationen verwalten – wir bieten zuverlässige, auf Ihre Bedürfnisse zugeschnittene Dienstleistungen.
                                @elseif(session('locale') === 'fr')
                                    Notre équipe est composée de traducteurs certifiés, d'experts en la matière, de linguistes natifs, d'agents de centre d'appels formés et de spécialistes techniques qualifiés. Que vous étendiez vos activités à de nouveaux marchés, lanciez des produits mondiaux ou gériez des opérations de communication à grand volume, nous offrons des services fiables adaptés à vos besoins.
                                @else
                                    Our team is composed of certified translators, subject-matter experts, native linguists, trained call-center agents, and qualified technical specialists. Whether you're expanding into new markets, launching global products, or managing high-volume communication operations, we offer reliable services tailored to your needs.
                                @endif
                            @endif
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End About style1-->
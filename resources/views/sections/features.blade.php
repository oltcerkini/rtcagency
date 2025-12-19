<!--Start Features Style1-->
@php
    // Fetch active features from database
    $feature = \App\Models\Feature::active()->ordered()->first();
@endphp

@if($feature)
<section class="features-style1">
    <div class="features-style1__top-border"></div>
    <div class="features-style1__shape1 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
        @if($feature->image)
        <img class="float-bob-y" src="{{ Storage::url($feature->image) }}" alt="{{ $feature->translated_title }}">
        @else
        <img class="float-bob-y" src="{{ asset('assets/images/businessman-working-together-office.jpg') }}" alt="{{ $feature->translated_title }}">
        @endif
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <div class="features-style1__content">
                    <div class="top-title">
                        <h2>{{ $feature->translated_title }}</h2>
                        <p>{{ $feature->translated_description }}</p>
                    </div>
                    <ul>
                        @php
                            // Get translated bullets array using the model's accessor
                            $translatedBullets = [
                                [
                                    'number' => '01.',
                                    'title' => $feature->translated_bullet_title_1,
                                    'description' => $feature->translated_bullet_description_1,
                                    'icon' => $feature->icon_1
                                ],
                                [
                                    'number' => '02.',
                                    'title' => $feature->translated_bullet_title_2,
                                    'description' => $feature->translated_bullet_description_2,
                                    'icon' => $feature->icon_2
                                ],
                                [
                                    'number' => '03.',
                                    'title' => $feature->translated_bullet_title_3,
                                    'description' => $feature->translated_bullet_description_3,
                                    'icon' => $feature->icon_3
                                ]
                            ];
                        @endphp
                        
                        @foreach($translatedBullets as $index => $bullet)
                        <li>
                            <div class="inner">
                                <div class="counting-box">{{ $bullet['number'] }}</div>
                                <div class="text-box">
                                    <h3>{{ $bullet['title'] }}</h3>
                                    <p>{!! nl2br(e($bullet['description'])) !!}</p>
                                    <div class="btns">
                                        <a href="#"><span class="icon-diagonal-arrow"></span></a>
                                    </div>
                                </div>
                                <div class="icon-box">
                                    <div class="round-shape"></div>
                                    <span class="{{ $bullet['icon'] }}"></span>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-xl-5">
                <div class="features-style1__img">
                    <div class="features-style1__shape-2 wow slideInRight" data-wow-delay="100ms"
                        data-wow-duration="2500ms">
                        <img class="rotate-me" src="{{ asset('assets/images/headphones.jpg') }}" alt="Decorative element">
                    </div>
                    <div class="box one"></div>
                    <div class="box two"></div>
                    <div class="box three"></div>
                    <div class="box four"></div>
                    <div class="features-style1__img-inner">
                        @if($feature->image)
                        <img src="{{ Storage::url($feature->image) }}" alt="{{ $feature->translated_title }}">
                        @else
                        <img src="{{ asset('assets/images/team.jpg') }}" alt="Professional Language Services Team">
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div><!-- /.container -->
</section>
@else
<!-- Fallback if no features exist -->
<section class="features-style1">
    <div class="features-style1__top-border"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <div class="features-style1__content">
                    <div class="top-title">
                        <h2>
                            @if(session('locale') === 'de')
                                Funktionen vom Admin-Panel hinzufügen
                            @elseif(session('locale') === 'fr')
                                Ajouter des fonctionnalités depuis le panneau d'administration
                            @else
                                Add features from admin panel
                            @endif
                        </h2>
                        <p>
                            @if(session('locale') === 'de')
                                Gehen Sie zum Filament-Admin, um Feature-Inhalte hinzuzufügen
                            @elseif(session('locale') === 'fr')
                                Allez dans l'admin Filament pour ajouter du contenu de fonctionnalité
                            @else
                                Go to Filament admin to add feature content
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="features-style1__img">
                    <div class="features-style1__img-inner">
                        <img src="{{ asset('assets/images/team.jpg') }}" alt="Default Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!--End Features Style1-->
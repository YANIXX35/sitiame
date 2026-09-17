@extends('layout')

@section('title', $service['name'])
@section('meta_description', $service['summary'])

@section('content')
<!-- slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{ asset('assets/img/hero/about.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-8">
                            <div class="hero-cap hero-cap2 pt-120">
                                <h2>{{ $service['name'] }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- Services Details Start -->
        <div class="services-details-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="single-services section-padding2">
                            <div class="details-img mb-40">
                                <img src="{{ asset('assets/img/gallery/services_details.png') }}" alt="{{ $service['name'] }}">
                            </div>
                            <div class="details-caption">
                                <p>{{ $service['summary'] }}</p>

                                <h3>Nos prestations</h3>
                                <ul class="mb-50">
                                    @foreach($service['points'] as $point)
                                    <li>{{ $point }}</li>
                                    @endforeach
                                </ul>

                                <h3>Comment pouvons-nous vous aider ?</h3>
                                <p>Notre méthodologie suit un processus rigoureux : analyse des besoins, étude technique et dimensionnement, proposition de solution, exécution des travaux, tests et mise en service, puis maintenance et suivi.</p>

                                <p>Qualité et conformité aux normes, respect des délais, sécurité des installations et innovation technologique sont au cœur de nos engagements sur chaque projet.</p>

                                <a href="{{ route('services') }}" class="btn red-btn2 mt-3">Voir tous nos services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Details End -->
@endsection

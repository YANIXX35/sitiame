@extends('layout')

@section('title', $project['name'].' - '.$project['location'])
@section('meta_description', $project['intro'])
@section('meta_image', asset('assets/img/gallery/projects/'.$project['image']))

@section('content')
<!-- slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{ asset('assets/img/hero/about.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap pt-100">
                                <h2>{{ $project['name'] }} - {{ $project['location'] }}</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('projects') }}">Projets</a></li>
                                    <li class="breadcrumb-item"><a href="#">{{ $project['name'] }}</a></li>
                                    </ol>
                                </nav>
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
                                <img src="{{ asset('assets/img/gallery/projects/'.$project['image']) }}" alt="{{ $project['name'] }} - {{ $project['location'] }}">
                            </div>
                            <div class="details-caption">
                                <p>{{ $project['intro'] }}</p>

                                <p class="mb-50">{{ $project['details'] }}</p>

                                <h3>Notre objectif principal</h3>
                                <p class="mb-50">Livrer un ouvrage conforme aux normes, dans les délais convenus, en assurant une communication transparente avec le client à chaque étape du chantier.</p>

                                <h3>Les défis du chantier</h3>
                                <p>Chaque projet présente ses propres contraintes techniques et logistiques. Notre équipe technique procède à une étude et un dimensionnement rigoureux avant l'exécution, afin d'anticiper ces défis et garantir un résultat de haute qualité.</p>

                                <a href="{{ route('projects') }}" class="btn red-btn2 mt-3">Voir tous nos projets</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Details End -->
@endsection

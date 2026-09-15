@extends('layout')

@section('title', 'Détail projet')

@section('content')
<!-- slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{ asset('assets/img/hero/about.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap pt-100">
                                <h2>Détail du projet</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                                    <li class="breadcrumb-item"><a href="#">Détail du projet</a></li>
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
                                <img src="{{ asset('assets/img/gallery/project_details.jpg') }}" alt="">
                            </div>
                            <div class="details-caption">
                                <p>Ce projet a été réalisé en interne par les équipes de SYS-Technologies Group, dans le respect des délais, des normes de qualité et de sécurité applicables aux travaux de construction et de génie civil.</p>

                                <p class="mb-50">Il illustre le savoir-faire de l'entreprise sur l'ensemble de la chaîne : terrassement, fondations, gros œuvre, second œuvre (plomberie, faux plafond, carrelage, peinture) jusqu'à la livraison finale.</p>

                                <h3>Notre objectif principal</h3>
                                <p class="mb-50">Livrer un ouvrage conforme aux normes, dans les délais convenus, en assurant une communication transparente avec le client à chaque étape du chantier.</p>

                                <h3>Les défis du chantier</h3>
                                <p>Chaque projet présente ses propres contraintes techniques et logistiques. Notre équipe technique procède à une étude et un dimensionnement rigoureux avant l'exécution, afin d'anticiper ces défis et garantir un résultat de haute qualité.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Details End -->
@endsection

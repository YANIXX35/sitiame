@extends('layout')

@section('title', 'À propos')
@section('meta_description', "Découvrez SYS-Technologies Group, entreprise d'ingénierie basée à Abidjan spécialisée en énergie, télécommunications, informatique & réseaux, sécurité électronique et BTP.")

@section('content')
<!-- slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{ asset('assets/img/hero/about.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap pt-100">
                                <h2>À propos</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                                    <li class="breadcrumb-item"><a href="#">À propos</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- About Area Start -->
        <section class="support-company-area fix pt-10 section-padding30">
            <div class="support-wrapper align-items-end">
                <div class="left-content">
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-55">
                        <div class="front-text">
                            <h2 class="">Qui sommes-nous</h2>
                        </div>
                        <span class="back-text">À propos</span>
                    </div>
                    <div class="support-caption">
                        <p class="pera-top">SYS-TECHNOLOGIES GROUP est une entreprise spécialisée dans l'ingénierie, les solutions technologiques et les services techniques multidisciplinaires, basée à Abidjan.</p>
                        <p>Elle intervient dans plusieurs domaines stratégiques : Énergie (courants forts et faibles), Télécommunications, Informatique & réseaux, Systèmes de sécurité électronique et incendie, BTP & infrastructures techniques. L'entreprise s'appuie sur une équipe expérimentée et qualifiée, capable de concevoir, réaliser et maintenir des installations complexes avec un haut niveau d'exigence professionnelle.</p>
                        <a href="{{ route('services') }}" class="btn red-btn2">nos services</a>
                    </div>
                </div>
                <div class="right-content">
                    <!-- img -->
                    <div class="right-img">
                        <img src="{{ asset('assets/img/gallery/safe_in.png') }}" alt="">
                    </div>
                    <div class="support-img-cap text-center">
                        <span>5</span>
                        <p>Domaines</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End --> 
        <!-- Testimonial Start -->
        <div class="testimonial-area t-bg testimonial-padding">
            <div class="container ">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle6 mb-50">
                            <div class="front-text">
                                <h2 class="">Témoignages</h2>
                            </div>
                            <span class="back-text">Avis clients</span>
                        </div>
                    </div>
                </div>
               <div class="row">
                    <div class="col-xl-10 col-lg-11 col-md-10 offset-xl-1">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <!-- SVG icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg"xmlns:xlink="http://www.w3.org/1999/xlink"width="86px" height="63px">
                                        <path fill-rule="evenodd"  stroke-width="1px" stroke="rgb(255, 95, 19)" fill-opacity="0" fill="rgb(0, 0, 0)"
                                        d="M82.623,59.861 L48.661,59.861 L48.661,25.988 L59.982,3.406 L76.963,3.406 L65.642,25.988 L82.623,25.988 L82.623,59.861 ZM3.377,25.988 L14.698,3.406 L31.679,3.406 L20.358,25.988 L37.340,25.988 L37.340,59.861 L3.377,59.861 L3.377,25.988 Z"/>
                                        </svg>
                                        <p>Une équipe réactive et rigoureuse qui a su respecter les délais et les normes techniques sur l'ensemble du chantier. Un vrai partenaire de confiance pour nos projets de construction.</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center">
                                       <div class="founder-text">
                                            <span>Client SYS-Technologies Group</span>
                                            <p>Projet immobilier, Bingerville</p>
                                       </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <!-- SVG icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg"xmlns:xlink="http://www.w3.org/1999/xlink"width="86px" height="63px">
                                        <path fill-rule="evenodd"  stroke-width="1px" stroke="rgb(255, 95, 19)" fill-opacity="0" fill="rgb(0, 0, 0)"
                                        d="M82.623,59.861 L48.661,59.861 L48.661,25.988 L59.982,3.406 L76.963,3.406 L65.642,25.988 L82.623,25.988 L82.623,59.861 ZM3.377,25.988 L14.698,3.406 L31.679,3.406 L20.358,25.988 L37.340,25.988 L37.340,59.861 L3.377,59.861 L3.377,25.988 Z"/>
                                        </svg>
                                        <p>Du terrassement aux finitions, l'équipe SYS-Technologies Group a fait preuve d'un grand professionnalisme. Un savoir-faire technique solide et une communication claire tout au long du projet.</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center">
                                       <div class="founder-text">
                                            <span>Client SYS-Technologies Group</span>
                                            <p>Projet immobilier, Yopougon-Songon</p>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Testimonial End -->
        <!-- Team Start -->
        <div class="team-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle5 mb-50">
                            <div class="front-text">
                                <h2 class="">Notre organisation</h2>
                            </div>
                            <span class="back-text">Direction</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- single Tem -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{ asset('assets/img/team/team1.png') }}" alt="">
                            </div>
                            <div class="team-caption">
                                <span>Direction</span>
                                <h3>Directeur Général</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{ asset('assets/img/team/team2.png') }}" alt="">
                            </div>
                            <div class="team-caption">
                                <span>Direction</span>
                                <h3>Direction administrative et financière</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{ asset('assets/img/team/team3.png') }}" alt="">
                            </div>
                            <div class="team-caption">
                                <span>Direction</span>
                                <h3>Direction technique</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
@endsection

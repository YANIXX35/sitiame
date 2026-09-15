@extends('layout')

@section('title', 'Services')

@section('content')
<!-- slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{ asset('assets/img/hero/about.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap pt-100">
                                <h2>Services</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Services</a></li> 
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- Services Area Start -->
        <div class="services-area1 section-padding30">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-55">
                            <div class="front-text">
                                <h2 class="">Our Services</h2>
                            </div>
                            <span class="back-text">Services</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="{{ asset('assets/img/service/servicess1.png') }}" alt="">
                            </div>
                            <div class="service-cap">
                                <h4><a href="{{ route('services.show', 1) }}">Télécommunications</a></h4>
                                <a href="{{ route('services.show', 1) }}" class="more-btn">Lire plus <i class="ti-plus"></i></a>
                            </div>
                            <div class="service-icon">
                                <img src="{{ asset('assets/img/icon/services_icon1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="{{ asset('assets/img/service/servicess2.png') }}" alt="">
                            </div>
                            <div class="service-cap">
                                <h4><a href="{{ route('services.show', 1) }}">Réseaux informatiques</a></h4>
                                <a href="{{ route('services.show', 1) }}" class="more-btn">Lire plus <i class="ti-plus"></i></a>
                            </div>
                            <div class="service-icon">
                                <img src="{{ asset('assets/img/icon/services_icon1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="{{ asset('assets/img/service/servicess3.png') }}" alt="">
                            </div>
                            <div class="service-cap">
                                <h4><a href="{{ route('services.show', 1) }}">Énergie & Électricité</a></h4>
                                <a href="{{ route('services.show', 1) }}" class="more-btn">Lire plus <i class="ti-plus"></i></a>
                            </div>
                            <div class="service-icon">
                                <img src="{{ asset('assets/img/icon/services_icon1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="{{ asset('assets/img/service/servicess4.png') }}" alt="">
                            </div>
                            <div class="service-cap">
                                <h4><a href="{{ route('services.show', 1) }}">Systèmes de sécurité</a></h4>
                                <a href="{{ route('services.show', 1) }}" class="more-btn">Lire plus <i class="ti-plus"></i></a>
                            </div>
                            <div class="service-icon">
                                <img src="{{ asset('assets/img/icon/services_icon1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="{{ asset('assets/img/service/servicess5.png') }}" alt="">
                            </div>
                            <div class="service-cap">
                                <h4><a href="{{ route('services.show', 1) }}">BTP & Génie civil</a></h4>
                                <a href="{{ route('services.show', 1) }}" class="more-btn">Lire plus <i class="ti-plus"></i></a>
                            </div>
                            <div class="service-icon">
                                <img src="{{ asset('assets/img/icon/services_icon1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="{{ asset('assets/img/service/servicess6.png') }}" alt="">
                            </div>
                            <div class="service-cap">
                                <h4><a href="{{ route('services.show', 1) }}">Énergies renouvelables</a></h4>
                                <a href="{{ route('services.show', 1) }}" class="more-btn">Lire plus <i class="ti-plus"></i></a>
                            </div>
                            <div class="service-icon">
                                <img src="{{ asset('assets/img/icon/services_icon1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Area End -->
@endsection

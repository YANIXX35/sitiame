@extends('layout')

@section('title', 'Détail service')
@section('meta_description', "Ingénierie technique & mise en œuvre par SYS-Technologies Group : conception, installation, maintenance et audit de vos systèmes techniques.")

@section('content')
<!-- slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{ asset('assets/img/hero/about.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-8">
                            <div class="hero-cap hero-cap2 pt-120">
                                <h2>Ingénierie technique & mise en œuvre</h2>
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
                                <img src="{{ asset('assets/img/gallery/services_details.png') }}" alt="">
                            </div>
                            <div class="details-caption">
                                <p>SYS-TECHNOLOGIES GROUP intervient dans la conception et les études techniques, l'installation et la mise en service, la maintenance préventive et corrective, l'audit et l'optimisation des systèmes, ainsi que la formation des utilisateurs.</p>

                                <p class="mb-50">Chaque intervention s'appuie sur une équipe de techniciens et ingénieurs qualifiés, capables de concevoir, réaliser et maintenir des installations complexes avec un haut niveau d'exigence professionnelle.</p>

                                <h3>Comment pouvons-nous vous aider ?</h3>
                                <p>Notre méthodologie suit un processus rigoureux : analyse des besoins, étude technique et dimensionnement, proposition de solution, exécution des travaux, tests et mise en service, puis maintenance et suivi.</p>

                                <p>Qualité et conformité aux normes, respect des délais, sécurité des installations et innovation technologique sont au cœur de nos engagements sur chaque projet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Details End -->
@endsection

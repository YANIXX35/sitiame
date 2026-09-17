@extends('layout')

@section('title', 'Blog')
@section('meta_description', "Actualités et chantiers de SYS-Technologies Group : suivez nos projets BTP, énergie et technologies à Abidjan et en Côte d'Ivoire.")

@section('content')
<!-- slider Area Start-->
    <div class="slider-area ">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{ asset('assets/img/hero/about.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap pt-100">
                            <h2> Blog</h2>
                            <nav aria-label="breadcrumb ">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                                <li class="breadcrumb-item"><a href="#"> Blog</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- slider Area End-->
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="{{ asset('assets/img/gallery/projects/r5-angre-djorobite.png') }}" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Sept</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="{{ route('blog.show', 1) }}">
                                    <h2>Bâtiment R+5 à Angré Djorobité : une réalisation clé</h2>
                                </a>
                                <p>Retour sur un chantier d'envergure mené par nos équipes, du terrassement jusqu'aux finitions, dans le respect des délais et des normes de construction.</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> BTP, Construction</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 03 Commentaires</a></li>
                                </ul>
                            </div>
                        </article>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="{{ asset('assets/img/gallery/projects/30-villas-yopougon-songon.png') }}" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Sept</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="{{ route('blog.show', 2) }}">
                                    <h2>30 Villas Duplex à Yopougon-Songon : un projet d'envergure</h2>
                                </a>
                                <p>Un programme immobilier ambitieux illustrant notre capacité à gérer des chantiers de grande envergure, de l'étude technique à la livraison.</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> BTP, Construction</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 03 Commentaires</a></li>
                                </ul>
                            </div>
                        </article>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="{{ asset('assets/img/gallery/projects/r3-bingerville-fondation.png') }}" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Sept</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="{{ route('blog.show', 3) }}">
                                    <h2>Immeuble R+3 à Bingerville : travaux de fondation achevés</h2>
                                </a>
                                <p>Les fondations de cet immeuble ont été réalisées avec rigueur par nos équipes techniques, posant les bases d'une structure durable.</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> BTP, Construction</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 03 Commentaires</a></li>
                                </ul>
                            </div>
                        </article>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="{{ asset('assets/img/gallery/projects/piscine-jacqueville.png') }}" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Sept</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="{{ route('blog.show', 4) }}">
                                    <h2>Piscine à Jacqueville : un chantier vers l'achèvement</h2>
                                </a>
                                <p>Un projet technique combinant génie civil et étanchéité, mené en parallèle de nos autres chantiers résidentiels.</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> BTP, Construction</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 03 Commentaires</a></li>
                                </ul>
                            </div>
                        </article>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="{{ asset('assets/img/gallery/projects/energies-shelters-courants-forts.png') }}" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Sept</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="{{ route('blog.show', 5) }}">
                                    <h2>SYS-Technologies Group renforce son expertise en énergies renouvelables</h2>
                                </a>
                                <p>Photovoltaïque, pompage solaire, optimisation énergétique : notre équipe technique développe son savoir-faire sur les solutions d'énergie renouvelable.</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> Énergie, Technologies</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 03 Commentaires</a></li>
                                </ul>
                            </div>
                        </article>

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Rechercher un mot-clé'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Rechercher un mot-clé'">
                                        <div class="input-group-append">
                                            <button class="btns" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Rechercher</button>
                            </form>
                        </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Catégories</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>BTP & Construction</p>
                                        <p>(12)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Énergie & Électricité</p>
                                        <p>(8)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Télécommunications</p>
                                        <p>(5)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Réseaux informatiques</p>
                                        <p>(4)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Systèmes de sécurité</p>
                                        <p>(3)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Actualités entreprise</p>
                                        <p>(6)</p>
                                    </a>
                                </li>
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Articles récents</h3>
                            <div class="media post_item">
                                <img src="{{ asset('assets/img/gallery/projects/r5-angre-djorobite.png') }}" alt="post">
                                <div class="media-body">
                                    <a href="{{ route('blog.show', 1) }}">
                                        <h3>Bâtiment R+5 à Angré Djorobité</h3>
                                    </a>
                                    <p>Il y a 5 jours</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{ asset('assets/img/gallery/projects/30-villas-yopougon-songon.png') }}" alt="post">
                                <div class="media-body">
                                    <a href="{{ route('blog.show', 2) }}">
                                        <h3>30 Villas Duplex à Yopougon-Songon</h3>
                                    </a>
                                    <p>Il y a 2 heures</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{ asset('assets/img/gallery/projects/r3-bingerville-fondation.png') }}" alt="post">
                                <div class="media-body">
                                    <a href="{{ route('blog.show', 3) }}">
                                        <h3>Immeuble R+3 à Bingerville</h3>
                                    </a>
                                    <p>Il y a 3 heures</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{ asset('assets/img/gallery/projects/piscine-jacqueville.png') }}" alt="post">
                                <div class="media-body">
                                    <a href="{{ route('blog.show', 4) }}">
                                        <h3>Piscine à Jacqueville</h3>
                                    </a>
                                    <p>Il y a 1 heure</p>
                                </div>
                            </div>
                        </aside>
                        @if(!empty($sectorNews))
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Veille du secteur</h3>
                            @foreach($sectorNews as $news)
                            <div class="media post_item">
                                <div class="media-body" style="margin-left: 0;">
                                    <a href="{{ $news['link'] }}" target="_blank" rel="noopener noreferrer nofollow">
                                        <h3>{{ $news['title'] }}</h3>
                                    </a>
                                    <p>{{ $news['source'] }} · {{ \Carbon\Carbon::createFromTimestamp($news['timestamp'])->diffForHumans() }}</p>
                                </div>
                            </div>
                            @endforeach
                        </aside>
                        @endif
                        <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Nuage de tags</h4>
                            <ul class="list">
                                <li>
                                    <a href="#">projet</a>
                                </li>
                                <li>
                                    <a href="#">énergie</a>
                                </li>
                                <li>
                                    <a href="#">technologie</a>
                                </li>
                                <li>
                                    <a href="#">télécoms</a>
                                </li>
                                <li>
                                    <a href="#">sécurité</a>
                                </li>
                                <li>
                                    <a href="#">BTP</a>
                                </li>
                                <li>
                                    <a href="#">construction</a>
                                </li>
                                <li>
                                    <a href="#">ingénierie</a>
                                </li>
                            </ul>
                        </aside>


                        <aside class="single_sidebar_widget instagram_feeds">
                            <h4 class="widget_title">Galerie photos</h4>
                            <ul class="instagram_row flex-wrap">
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset('assets/img/gallery/projects/trois-duplex-angre-djorobite.jpeg') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset('assets/img/gallery/projects/r2-bingerville-1.png') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset('assets/img/gallery/projects/villa-angre-kessie.png') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset('assets/img/gallery/projects/r3-anyama-ebimpe.jpeg') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset('assets/img/gallery/projects/charpente-metallique.png') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset('assets/img/gallery/projects/electricite-composantes.png') }}" alt="">
                                    </a>
                                </li>
                            </ul>
                        </aside>


                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>

                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Votre email'" placeholder='Votre email' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">S'abonner</button>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
@endsection

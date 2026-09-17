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
                        @if($query !== '')
                        <p class="mb-4">Résultats pour « {{ $query }} » ({{ count($articles) }})&nbsp;&mdash;&nbsp;<a href="{{ route('blog') }}">réinitialiser</a></p>
                        @endif

                        @forelse($articles as $id => $article)
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="{{ asset('assets/img/'.$article['image']) }}" alt="{{ $article['title'] }}">
                                <a href="{{ route('blog.show', $id) }}" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Sept</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="{{ route('blog.show', $id) }}">
                                    <h2>{{ $article['title'] }}</h2>
                                </a>
                                <p>{{ $article['excerpt'] }}</p>
                                <ul class="blog-info-link">
                                    <li><a href="{{ route('blog.show', $id) }}"><i class="fa fa-user"></i> {{ $article['tag'] }}</a></li>
                                </ul>
                            </div>
                        </article>
                        @empty
                        <p>Aucun article ne correspond à votre recherche.</p>
                        @endforelse
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="{{ route('blog') }}" method="get">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" name="q" class="form-control" placeholder='Rechercher un mot-clé'
                                            value="{{ $query }}"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Rechercher un mot-clé'">
                                        <div class="input-group-append">
                                            <button class="btns" type="submit"><i class="ti-search"></i></button>
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
                                @foreach($categories as $name => $count)
                                <li>
                                    <a href="{{ route('blog', ['q' => $name]) }}" class="d-flex">
                                        <p>{{ $name }}</p>
                                        <p>({{ $count }})</p>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Articles récents</h3>
                            <div class="media post_item">
                                <img src="{{ asset('assets/img/gallery/projects/r5-angre-djorobite.jpg') }}" alt="post">
                                <div class="media-body">
                                    <a href="{{ route('blog.show', 1) }}">
                                        <h3>Bâtiment R+5 à Angré Djorobité</h3>
                                    </a>
                                    <p>Il y a 5 jours</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{ asset('assets/img/gallery/projects/30-villas-yopougon-songon.jpg') }}" alt="post">
                                <div class="media-body">
                                    <a href="{{ route('blog.show', 2) }}">
                                        <h3>30 Villas Duplex à Yopougon-Songon</h3>
                                    </a>
                                    <p>Il y a 2 heures</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{ asset('assets/img/gallery/projects/r3-bingerville-fondation.jpg') }}" alt="post">
                                <div class="media-body">
                                    <a href="{{ route('blog.show', 3) }}">
                                        <h3>Immeuble R+3 à Bingerville</h3>
                                    </a>
                                    <p>Il y a 3 heures</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{ asset('assets/img/gallery/projects/piscine-jacqueville.jpg') }}" alt="post">
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
                                @foreach($categories as $name => $count)
                                <li>
                                    <a href="{{ route('blog', ['q' => $name]) }}">{{ $name }}</a>
                                </li>
                                @endforeach
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
                                        <img class="img-fluid" src="{{ asset('assets/img/gallery/projects/r2-bingerville-1.jpg') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset('assets/img/gallery/projects/villa-angre-kessie.jpg') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset('assets/img/gallery/projects/r3-anyama-ebimpe.jpeg') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset('assets/img/gallery/projects/charpente-metallique.jpg') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset('assets/img/gallery/projects/electricite-composantes.jpg') }}" alt="">
                                    </a>
                                </li>
                            </ul>
                        </aside>


                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>

                            @if (session('status'))
                                <div class="alert alert-success">{{ session('status') }}</div>
                            @endif

                            <form action="{{ route('newsletter.subscribe') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" onfocus="this.placeholder = ''"
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

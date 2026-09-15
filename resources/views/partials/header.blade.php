<header>
        <!-- Header Start -->
       <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-top d-none d-lg-block">
                   <div class="container-fluid">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li>+XXX XX XXX XXX</li>
                                        <li>contact@sys-technologies.com</li>
                                        <li>Lun - Sam 8:00 - 17:30, Dimanche - Fermé</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">    
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                       <li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                    <!-- logo-1 -->
                                    <a href="{{ route('home') }}" class="big-logo"><img src="{{ asset('assets/img/logo/logo.png') }}" alt=""></a>
                                    <!-- logo-2 -->
                                    <a href="{{ route('home') }}" class="small-logo"><img src="{{ asset('assets/img/logo/loder-logo.png') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">                                                                                                                   
                                            <li><a href="{{ route('home') }}">Accueil</a></li>
                                            <li><a href="{{ route('about') }}">À propos</a></li>
                                            <li><a href="{{ route('projects') }}">Projets</a></li>
                                            <li><a href="{{ route('services') }}">Services</a></li>
                                            <li><a href="{{ route('blog') }}">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="{{ route('blog') }}">Blog</a></li>
                                                    <li><a href="{{ route('blog.show', 1) }}">Détail article</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="{{ route('projects.show', 1) }}">Détail projet</a></li>
                                                    <li><a href="{{ route('services.show', 1) }}">Détail service</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('contact') }}">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>             
                            <div class="col-xl-2 col-lg-2 col-md-3">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <a href="{{ route('contact') }}" class="btn">Nous contacter</a>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

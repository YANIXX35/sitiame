<footer>
        <!-- Footer Start-->
        <div class="footer-main">
                <div class="footer-area footer-padding">
                    <div class="container">
                        <div class="row  justify-content-between">
                            <div class="col-lg-4 col-md-4 col-sm-8">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo/logo2_footer.png') }}" alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p class="info1">SYS-TECHNOLOGIES GROUP est une entreprise d'ingénierie et de services techniques multidisciplinaires basée à Abidjan : énergie, télécommunications, informatique & réseaux, sécurité électronique/incendie et BTP.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-5">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Liens rapides</h4>
                                        <ul>
                                            <li><a href="{{ route('about') }}">À propos</a></li>
                                            <li><a href="{{ route('services') }}">Services</a></li>
                                            <li><a href="{{ route('projects') }}">Projets</a></li>
                                            <li><a href="{{ route('contact') }}">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-7">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Contact</h4>
                                        <div class="footer-pera">
                                            <p class="info1">Abidjan, Côte d'Ivoire</p>
                                        </div>
                                        <ul>
                                            <li><a href="tel:+2250716468149">Téléphone : +225 07 16 46 81 49</a></li>
                                            <li><a href="mailto:infos@sys-technologies.com">infos@sys-technologies.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-8">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Nous trouver</h4>
                                    </div>
                                    <!-- Map -->
                                    <div class="map-footer">
                                        <iframe
                                            src="https://www.google.com/maps?q=Abidjan,+C%C3%B4te+d%27Ivoire&output=embed"
                                            width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade" title="Localisation SYS-Technologies Group - Abidjan">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Copy-Right -->
                        <div class="row align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right">
                                    <p>Copyright &copy; {{ date('Y') }} Sys Technologies Group. Tous droits réservés.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Footer End-->
    </footer>

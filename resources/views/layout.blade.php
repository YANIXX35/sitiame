<!doctype html>
<html class="no-js" lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @php
        $pageTitle = trim(\Illuminate\Support\Facades\View::hasSection('title') ? \Illuminate\Support\Facades\View::yieldContent('title') : 'Sys Technologies Group');
        $metaDescription = \Illuminate\Support\Facades\View::hasSection('meta_description')
            ? trim(\Illuminate\Support\Facades\View::yieldContent('meta_description'))
            : "SYS-Technologies Group est une entreprise d'ingénierie et de services techniques multidisciplinaires basée à Abidjan : énergie, télécommunications, informatique & réseaux, sécurité électronique/incendie et BTP.";
        $ogImage = \Illuminate\Support\Facades\View::hasSection('meta_image') ? trim(\Illuminate\Support\Facades\View::yieldContent('meta_image')) : asset('assets/img/hero/h1_hero.jpg');
    @endphp
    <title>{{ $pageTitle }} | Sys Technologies Group</title>
    <meta name="description" content="{{ $metaDescription }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/favicon.png') }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Sys Technologies Group">
    <meta property="og:title" content="{{ $pageTitle }} | Sys Technologies Group">
    <meta property="og:description" content="{{ $metaDescription }}">
    <meta property="og:image" content="{{ $ogImage }}">
    <meta property="og:locale" content="fr_FR">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $pageTitle }} | Sys Technologies Group">
    <meta name="twitter:description" content="{{ $metaDescription }}">
    <meta name="twitter:image" content="{{ $ogImage }}">

    <!-- Structured data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "GeneralContractor",
        "name": "SYS-Technologies Group",
        "alternateName": "Sys Technologies Group",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('assets/img/logo/logo.png') }}",
        "image": "{{ $ogImage }}",
        "telephone": "+2250716468149",
        "email": "infos@sys-technologies.com",
        "description": "Entreprise d'ingénierie et de services techniques multidisciplinaires : énergie, télécommunications, informatique & réseaux, sécurité électronique/incendie et BTP.",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Abidjan",
            "addressCountry": "CI"
        },
        "areaServed": "Côte d'Ivoire"
    }
    </script>

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <style>
        .logo { display: flex; align-items: center; height: 100%; }
        .logo img { max-height: 55px; width: auto; }
        .header-sticky.sticky .logo img,
        .header-bottom.sticky .logo img { max-height: 45px; }
        .footer-logo img { max-height: 55px; width: auto; }
        .preloader-img img { max-height: 90px; width: auto; }
    </style>

    @stack('styles')
</head>

<body>
    @include('partials.preloader')

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/gijgo.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/animated.headline.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @stack('scripts')
</body>
</html>

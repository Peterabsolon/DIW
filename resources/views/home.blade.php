<!DOCTYPE html>
<html class="page-index">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>DIW</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        
        <link rel="stylesheet" href="{!! asset('assets/css/app.css') !!}">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a     href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="perspective" class="perspective">

            <button type="button" class="btn-toggle-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>

            <div class="perspective-container">
                <div class="canvas">
                    
                    <header class="header">
                        <a href="{!! route('home') !!}" class="site-logo">
                            <img src="{!! asset('images/site/site-logo.svg') !!}" alt="DIW" class="desktop">
                            <img src="{!! asset('images/site/site-logo@mobile.svg') !!}" alt="DIW" class="mobile">
                        </a>
                    </header> {{-- /.header --}}

                    <section class="hero">
                        <div class="hero-content">
                            <h2 class="hero-title">{!! nl2br($slogan) !!}</h2>
                            <a href="{!! route('portfolio') !!}" class="btn btn-secondary">Naše práce</a>
                        </div>
                    </section> {{-- /.hero --}}

                    <div class="divider"></div>

                    <section class="services">
                        <ul class="services-list">
                            @foreach($services as $service)
                            <li>
                                <div class="service-icon"><img src="{{ asset('images/services/' . $service->image) }}"></div>
                                <h2 class="service-title">{{ $service->title }}</h2>
                                <div class="service-body">{!! $service->body !!}</div>
                                <a href="{!! route('contact') !!}" class="btn btn-primary">Mám záujem</a>
                            </li>
                            @endforeach
                        </ul>
                    </section> {{-- /.services --}}

                    <h2 class="section-title">Klienti</h2>

                    <section class="clients">
                        <ul class="clients-list">
                            @foreach($clients as $client)
                            <li>
                                <img src="{!! asset('images/clients/' . $client->image) !!}" alt="{{ $client->title }}">
                            </li>
                            @endforeach
                        </ul>
                    </section> {{-- /.clients --}}

                    <section class="photos">
                        <ul class="photos-list">
                            @foreach($photos as $photo)
                            <li>
                                <img src="{!! asset('images/photos/' . $photo->image) !!}" alt="{{ $photo->title }}">
                            </li>
                            @endforeach
                        </ul>
                    </section> {{-- /.photos --}}

                    <section class="social-buttons">
                        <ul class="social-buttons-list">
                            <li><a class="logo-facebook" href="{{ $social_links['facebook'] }}"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="logo-twitter" href="{{ $social_links['twitter'] }}"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="logo-youtube" href="{{ $social_links['youtube'] }}"><i class="fa fa-youtube"></i></a></li>
                            <li><a class="logo-linkedin" href="{{ $social_links['linkedin'] }}"><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="logo-instagram" href="{{ $social_links['instagram'] }}"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </section> {{-- /.social-buttons --}}

                    <footer class="footer">
                        <div class="footer-contacts">
                            <h3 class="footer-title">Kontakt</h3>
                            <ul class="footer-contacts-list">
                                <li><a href="mailto:{{ $email }}">{{ $email }}</a></li>
                                <li><a href="tel:{{ $phone }}">{{ $phone }}</a></li>
                                <li><a href="{{ route('home') }}">www.diw.sk</a></li>
                            </ul>
                        </div>
                        <div class="footer-copyrights">
                            <p>&copy; 2015 diw.sk. Všetky práva vyhradené.</p>
                        </div>
                    </footer> {{-- /.footer --}}

                </div> {{-- /.canvas --}}
            </div> {{-- /.perspective-container --}}

            <nav class="navigation">
                <span><a href="{{ route('home') }}">Domov</a></span>
                <span><a href="{{ route('portfolio') }}">Portfólio</a></span>
                <span><a href="{{ route('contact') }}">Kontakt</a></span>
            </nav> {{-- ./navigation --}}

        </div> {{-- ./perspective --}}
    </body>

    <!-- <script src="//code.jquery.com/jquery-1.11.3.min.js"></script> -->
    <script src="{!! asset('assets/js/libs.js') !!}"></script>
    <script src="{!! asset('assets/js/app.js') !!}"></script>
</html>

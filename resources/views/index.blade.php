<!DOCTYPE html>
<html class="no-js page-index">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>DIW</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        
        <link rel="stylesheet" href="{!! asset('assets/css/app.css') !!}">

        <!-- <script async src="{!! asset('js/plugins.js') !!}"></script> -->
        <script async src="{!! asset('assets/js/app.js') !!}"></script>
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
                            <h2 class="hero-title">Len ďalšia <br> kreatívna agentúra?</h2>
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
                            <li class="logo-facebook"><a href="{{ $social_links['facebook'] }}"><span class="icon">Facebook</span></a></li>
                            <li class="logo-twitter"><a href="{{ $social_links['twitter'] }}"><span class="icon">Twitter</span></a></li>
                            <li class="logo-youtube"><a href="{{ $social_links['youtube'] }}"><span class="icon">YouTube</span></a></li>
                            <li class="logo-linkedin"><a href="{{ $social_links['linkedin'] }}"><span class="icon">LinkedIn</span></a></li>
                            <li class="logo-instagram"><a href="{{ $social_links['instagram'] }}"><span class="icon">Instagram</span></a></li>
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
                            <span>&copy; 2015 diw.sk. Všetky práva vyhradené.</span>
                        </div>
                    </footer> {{-- /.footer --}}

                </div> {{-- /.canvas --}}
            </div> {{-- /.perspective-container --}}

            <nav class="navigation">
                <a href="{{ route('home') }}">Domov</a>
                <a href="{{ route('portfolio') }}">Portfólio</a>
                <a href="{{ route('contact') }}">Kontakt</a>
            </nav>
        </div> {{-- ./perspective --}}
    </body>
</html>

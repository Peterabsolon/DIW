<!DOCTYPE html>
<html class="page-portfolio">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>DIW | Portfólio</title>
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

                    <section class="projects">
                        <ul class="slider">
                            @foreach($projects as $project_key => $project)
                            <li class="slide" style="background-image: url('{!! asset('images/articles/' . $project->image) !!}')">
                                <div class="project-header">
                                    <h2 class="project-title">{{ $project->title }}</h2>
                                    <h3 class="project-services">{!! $project->services !!}</h3>
                                </div>
                            </li>
                            @endforeach
                        </ul>   
                        <div class="slider-controls">

                        </div>
                    </section>

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
                <a href="{{ route('home') }}">Domov</a>
                <a href="{{ route('portfolio') }}">Portfólio</a>
                <a href="{{ route('contact') }}">Kontakt</a>
            </nav> {{-- ./navigation --}}

        </div> {{-- ./perspective --}}
    </body>

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="{!! asset('assets/js/portfolio.js') !!}"></script>      

    <script src="{!! asset('assets/js/app.js') !!}"></script>
</html>

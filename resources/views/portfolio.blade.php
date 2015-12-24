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

        {{-- Generate CSS for project backgrounds --}}
        <style>
            /* use the ol' php foreach loop to prevent blade template conflict */
            <?php foreach($projects as $key => $project) { ?>
                .slide-<?php echo $key; ?>.loaded {
                    background-image: url('images/articles/<?php echo $project->background_small; ?>');
                }

                @media only screen and (-webkit-min-device-pixel-ratio: 1.5),
                only screen and (min-resolution: 144dpi),
                (-webkit-min-device-pixel-ratio: 144),
                (min-resolution: 144dppx) {
                    .slide-<?php echo $key; ?>.loaded {
                        background-image: url('images/articles/<?php echo $project->background_small_2x; ?>');
                    }
                }

                @media only screen and (min-width: 768px) {
                    .slide-<?php echo $key; ?>.loaded {
                        background-image: url('images/articles/<?php echo $project->background_medium; ?>');
                    }                    
                }

                @media only screen and (-webkit-min-device-pixel-ratio: 1.5) and (min-width: 768px),
                only screen and (min-resolution: 144dpi) and (min-width: 768px),
                (-webkit-min-device-pixel-ratio: 144) and (min-width: 768px),
                (min-resolution: 144dppx) and (min-width: 768px) {
                    .slide-<?php echo $key; ?>.loaded {
                        background-image: url('images/articles/<?php echo $project->background_medium_2x; ?>');
                    }
                }            

                @media only screen and (min-width: 992px) {
                    .slide-<?php echo $key; ?>.loaded {
                        background-image: url('images/articles/<?php echo $project->background_large; ?>');
                    }                    
                }
            <?php } ?>
        </style>

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
                            @if($project_key < 2)
                            <li class="slide loaded slide-{{ $project_key }}">
                            @else 
                            <li class="slide slide-{{ $project_key }}">
                            @endif
                                <div class="project-header">
                                    <div class="project-header-content">
                                        <h2 class="project-title">{{ $project->title }}</h2>
                                        <h3 class="project-services">{!! $project->services !!}</h3>                                        
                                    </div>
                                </div>
                                <div class="project-body">
                                    <div class="intro">
                                        <button type="button" ca></button>
                                    </div>
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

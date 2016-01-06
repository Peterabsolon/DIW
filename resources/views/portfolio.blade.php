<!DOCTYPE html>
<html class="page-portfolio">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>DIW | Portfólio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link href="{!! asset('images/site/favicon.png') !!}" rel="icon" />
        
        <link rel="stylesheet" href="{!! asset('assets/css/app.css') !!}">      
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a     href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        {{-- Generate CSS for project backgrounds --}}
        <style>
            /* use the ol' php foreach loop to prevent blade template syntax conflict with CSS */
            <?php foreach($projects as $key => $project) { ?>
                .slide-<?php echo $key; ?>.loaded .project-header {
                    background-image: url('images/articles/<?php echo $project->background_small; ?>');
                }

                @media only screen and (-webkit-min-device-pixel-ratio: 1.5),
                only screen and (min-resolution: 144dpi),
                (-webkit-min-device-pixel-ratio: 144),
                (min-resolution: 144dppx) {
                    .slide-<?php echo $key; ?>.loaded .project-header {
                        background-image: url('images/articles/<?php echo $project->background_small_2x; ?>');
                    }
                }

                @media only screen and (min-width: 768px) {
                    .slide-<?php echo $key; ?>.loaded .project-header {
                        background-image: url('images/articles/<?php echo $project->background_medium; ?>');
                    }                    
                }

                @media only screen and (-webkit-min-device-pixel-ratio: 1.5) and (min-width: 768px),
                only screen and (min-resolution: 144dpi) and (min-width: 768px),
                (-webkit-min-device-pixel-ratio: 144) and (min-width: 768px),
                (min-resolution: 144dppx) and (min-width: 768px) {
                    .slide-<?php echo $key; ?>.loaded .project-header {
                        background-image: url('images/articles/<?php echo $project->background_medium_2x; ?>');
                    }
                }            

                @media only screen and (min-width: 992px) {
                    .slide-<?php echo $key; ?>.loaded .project-header {
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
                                    <?php 
                                        $project_color = $project->color;

                                        if ($project_color == '') {
                                            $project_color = '000';
                                        }
                                    ?>
                                    <button type="button" class="btn-project-hide"><i class="fa fa-angle-double-up"></i></button>
                                    <div class="intro" style="background-color: #{{ $project_color }}">
                                        <h3 class="project-title">{{ $project->title }}</h3>
                                        <div class="project-description">{!! $project->body !!}</div>
                                    </div>
                                    <div class="divider inverse" style="border-color: transparent #{{ $project_color }}"></div>
                                    <div class="gallery-header">
                                        @if($project_key < 2 && !empty($project->image_left) && !empty($project->image_right))
                                        <div class="image-container">
                                            <img src="images/articles/{{ $project->image_left }}" alt="{{ $project->title }}" class="project-image-left">
                                        </div>
                                        <div class="image-container">
                                            <img src="images/articles/{{ $project->image_right }}" alt="{{ $project->title }}" class="project-image-right">
                                        </div>
                                        @elseif (!empty($project->image_left) && !empty($project->image_right))
                                        <div class="image-container">
                                            <img src="" data-src="images/articles/{{ $project->image_left }}" alt="{{ $project->title }}" class="project-image-left">
                                        </div>
                                        <div class="image-container">
                                            <img src="" data-src="images/articles/{{ $project->image_right }}" alt="{{ $project->title }}" class="project-image-right">
                                        </div>                                        
                                        @endif
                                    </div>
                                    <?php $logos_count = count($project->logos); ?>
                                    @if($logos_count > 0)
                                    <div class="gallery-logos logos-count-{{ $logos_count }}">
                                        @foreach($project->logos as $logo)
                                        <div class="image-container">
                                            @if($project_key < 2)
                                            <img src="images/articles/{{ $logo->image }}" class="project-logo">
                                            @else
                                            <img src="" data-src="images/articles/{{ $logo->image }}" class="project-logo">
                                            @endif
                                        </div>
                                        @endforeach
                                    </div>
                                    @endif
                                    <?php $images_count = count($project->images); ?>
                                    @if($images_count > 0)
                                    <div class="gallery-images">
                                        @foreach($project->images as $image)
                                        <div class="image-container">
                                            @if($project_key < 2)
                                            <img src="images/articles/{{ $image->image }}" class="project-image">
                                            @else
                                            <img src="" data-src="images/articles/{{ $image->image }}" class="project-image">
                                            @endif
                                        </div>
                                        @endforeach
                                    </div>
                                    @endif
                                    <button type="button" class="btn-scroll-top"><i class="fa fa-angle-double-up"></i></button>
                                    <div class="project-contact">
                                        <h4 class="contact-title">Máte záujem o spoluprácu?</h4>
                                        <a href="{{ route('contact') }}" class="btn btn-primary btn-contact-us">Napíšte nám</a>
                                    </div>
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
                                </div>
                            </li>
                            @endforeach
                        </ul>   
                        <div class="slider-controls">
                            <button type="button" class="btn-project-prev disabled"><i class="fa fa-angle-double-left"></i></button>
                            <button type="button" class="btn-project-show"><i class="fa fa-search"></i> Detail</button>
                            <button type="button" class="btn-project-next"><i class="fa fa-angle-double-right"></i></button>
                        </div>
                    </section>

                </div> {{-- /.canvas --}}
            </div> {{-- /.perspective-container --}}

            <nav class="navigation">
                <span><a href="{{ route('home') }}">Domov</a></span>
                <span><a href="{{ route('portfolio') }}">Portfólio</a></span>
                <span><a href="{{ route('about') }}">O nás</a></span>
                <span><a href="{{ route('contact') }}">Kontakt</a></span>
            </nav> {{-- ./navigation --}}

        </div> {{-- ./perspective --}}
    </body>

    <!-- <script src="//code.jquery.com/jquery-1.11.3.min.js"></script> -->
    <script src="{!! asset('assets/js/libs.js') !!}"></script>
    <script src="{!! asset('assets/js/app.js') !!}"></script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-72083140-1', 'auto');
      ga('send', 'pageview');
    </script>    
</html>

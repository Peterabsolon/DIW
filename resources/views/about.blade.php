<!DOCTYPE html>
<html class="page-about">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>DIW | O nás</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link href="{!! asset('images/site/favicon.png') !!}" rel="icon" />
        
        <link rel="stylesheet" href="{!! asset('assets/css/app.css') !!}">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="perspective" class="perspective">

            <button type="button" class="btn-toggle-menu inverse">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>

            <div class="perspective-container">
                <div class="canvas">
                    
                    <header class="header">
                        <a href="{!! route('home') !!}" class="site-logo">
                            <img src="{!! asset('images/site/site-logo.svg') !!}" alt="DIW" class="desktop svg">
                            <img src="{!! asset('images/site/site-logo@mobile.svg') !!}" alt="DIW" class="mobile svg">
                        </a>
                    </header> {{-- /.header --}}

                    <h2 class="section-title">O nás</h2>
    
                    <p class="company-slogan">
                        {{ $slogan }}
                    </p>

                    <p class="company-description">
                        {!! $description !!}
                    </p>

                    <section class="employees">
                        <ul class="employees-list">
                            @foreach($employees as $employee)
                            <li>
                                <div class="employee-image">
                                    <img src="{!! asset('images/employees/' . $employee->image) !!}" alt="{{ $employee->name }}">
                                </div>
                                <h2 class="employee-name">{{ $employee->name }}</h2>
                                <h3 class="employee-role">{{ $employee->role }}</h3>
                            </li>
                            @endforeach
                        </ul>
                    </section>
 
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
                            <li><a class="logo-facebook" href="{{ $social_links['facebook'] }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="logo-twitter" href="{{ $social_links['twitter'] }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="logo-youtube" href="{{ $social_links['youtube'] }}" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            <li><a class="logo-linkedin" href="{{ $social_links['linkedin'] }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="logo-instagram" href="{{ $social_links['instagram'] }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
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
                <span><a href="{{ route('about') }}">O nás</a></span>
                <span><a href="{{ route('contact') }}">Kontakt</a></span>
            </nav> {{-- ./navigation --}}

        </div> {{-- ./perspective --}}
    </body>

    <!-- <script src="//code.jquery.com/jquery-1.11.3.min.js"></script> -->
    <script src="{!! asset('assets/js/libs.js') !!}"></script>
    <script src="{!! asset('assets/js/app.js') !!}"></script>

    <script>
        // TODO: Move this code to app.js, at this point we get initMap() not defined
        var map;

        function initMap() {
          var myLatLng = {lat: 48.176946, lng: 17.169358};
          var isDraggable = $(document).width() > 480 ? true : false;

          map = new google.maps.Map(document.getElementById('google-map'), {
            draggable: isDraggable,
            center: myLatLng,
            scrollwheel: false,
            zoom: 17
          });
          
          var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            // icon: image,
            title: "DIW Studio"
          });
        }    
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDpnLYAF2V9RNZ7Ue945mIEE0Fj2BUWeA&callback=initMap"></script>
</html>

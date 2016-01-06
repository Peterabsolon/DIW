<!DOCTYPE html>
<html class="page-contact">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>DIW | Kontakt</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link href="{!! asset('images/site/favicon.png') !!}" rel="icon" />
        
        <link rel="stylesheet" href="{!! asset('assets/css/app.css') !!}">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a     href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
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

                    <h2 class="section-title">Kontakt</h2>

                    <p class="contact-text">
                        V prípade záujmu o spoluprácu nás neváhajte kontaktovať cez nižšie uvedený formulár alebo priamo na emailovej adrese <br> <a href="mailto:{{ $email }}"><strong>{{ $email }}</strong></a>
                    </p>

                    <div class="contact-data">
                        <div class="email"><a href="mailto:{{ $email }}"><i class="fa fa-envelope"></i> {{ $email }}</a></div>
                        <div class="phone"><a href="tel:{{ $phone }}"><i class="fa fa-phone"></i> {{ $phone }}</a></div>
                        <div class="address"><a href="#" class="btn-scroll-to-map"><i class="fa fa-map-marker"></i> Galvaniho 2/A</a href="#" class="btn-scroll-to-map"></div>
                    </div>

                    @if(Session::has('message'))
                        <div class="form-success">
                          {{Session::get('message')}}
                        </div>
                    @endif                    

                    {!! Form::open(array('route' => 'contact.send', 'class' => 'contact-form', 'method' => 'POST')) !!}

                        <div class="form-left">
                            <?php if($errors->first('name')) { ?>
                            <div class="form-group has-error">
                            <?php } else { ?>
                            <div class="form-group">
                            <?php } ?>
                                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Meno*']) !!}
                                {!! $errors->first('name', '<div class="form-error">:message</div>'); !!}
                            </div>
                            <?php if($errors->first('email')) { ?>
                            <div class="form-group has-error">
                            <?php } else { ?>
                            <div class="form-group">
                            <?php } ?>
                                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail*']) !!}
                                {!! $errors->first('email', '<div class="form-error">:message</div>'); !!}
                            </div>                   
                            <div class="form-group">
                                {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Telefónne číslo']) !!}
                            </div>                   
                            <div class="form-group">
                                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Predmet správy']) !!}
                            </div>                                              
                        </div>

                        <div class="form-right">
                            <?php if($errors->first('body')) { ?>
                            <div class="form-group has-error">
                            <?php } else { ?>
                            <div class="form-group">
                            <?php } ?>
                                {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Vaša správa']) !!}
                                {!! $errors->first('body', '<div class="form-error error-textarea">:message</div>'); !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Odoslať', ['class' => 'btn btn-primary btn-submit']) !!}
                            </div>                            
                        </div>

                    {!! Form::close() !!}

                    <section class="legal-info">
                        <h4 class="company-name">{{ $company_data['name'] }}</h4>
                        <div class="company-data">
                            <div class="col col-address"><p>{!! $company_data['address'] !!}</p></div>
                            <div class="col col-legal-left"><p>{!! $company_data['legal_left'] !!}</p></div>
                            <div class="col col-legal-right"><p>{!! $company_data['legal_right'] !!}</p></div>
                        </div>
                    </section> {{-- /.legal-info --}}

                    <section class="google-map">
                        <div id="google-map"></div>
                    </section> {{-- /.google-map --}}
 
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
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-72083140-1', 'auto');
      ga('send', 'pageview');
    </script>

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
          
          var image = "{!! asset('images/site/map_marker.png') !!}";
          var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            icon: image,
            title: "DIW Studio"
          });
        }    
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDpnLYAF2V9RNZ7Ue945mIEE0Fj2BUWeA&callback=initMap"></script>
</html>

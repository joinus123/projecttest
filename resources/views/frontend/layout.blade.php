<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="icon" type="image/png" href="{{asset('assets/images/tree-img.png')}}">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <title>Who Cares Today</title>
      <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
      <link rel="icon" type="image/png" href="{{asset('assets/images/tree-img.png')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets//css/style.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap&subset=cyrillic,latin-ext" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Yatra+One&display=swap&subset=devanagari,latin-ext" rel="stylesheet">
   </head>
   <body>
         <div class="overlay">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <input type="text" placeholder="enter search and press icon again" id="searchString" />
                  <!--<input id="submitSearch" type="submit" value="" />-->
                  <button class="sear-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
               </div>
            </div>
         </div>
         <button type="button" class="search-close search-form_close close"><i class="fa fa-times"></i></button>
         </div>


      <header class="fixed-top" id="banner">
         <div class="top-bar">
            <div class="container">
               <div class="row align-items-center align-content-center">
                  <div class="col-md-3 col-6">
                     <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="img-fluid">
                  </div>
                  <div class="col-md-7 col-6 align-none text-right">
                     <div id="navbar">
                        <div class="nav-fill">
                           <nav class="navbar navbar-expand-md navbar-light" role="navigation">
                              <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                              </button>
                              <div class="collapse navbar-collapse" id="navbarContent">
                                 <ul class="navbar-nav nav-fill w-100">
                                    <li class="nav-item">
                                       <a href="{{ route('homepage') }}" role="button" class="btn btn-default">Home</a>
                                    </li>
                                    <li class="nav-item">

                                          <a href="{{ route('about-us') }}" role="button" class="btn btn-default">About Who Cares</a>


                                    </li>
                                    <li class="nav-item">

                                          <a href="{{ route('view-features') }}" role="button" class="btn btn-default">Our Features</a>


                                    </li>
                                    <li class="nav-item">

                                          <a href="{{ route('view-testinomail') }}" role="button" class="btn btn-default">Testimonials</a>


                                    </li>
                                    <li class="nav-item">

                                          <a href="{{ route('view-contactus') }}" role="button" class="btn btn-default">Contact Us</a>
                                          <!--                                           <button class="btn btn-default dropdown-toggle dropdown-toggle-split d-none d-md-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                             <span class="sr-only">Toggle Dropdown</span>
                                             </button>
                                             <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Item</a>
                                             </div> -->

                                    </li>
                                    <li class="nav-item">

                                          <a href="{{ route('view-faqs') }}" role="button" class="btn btn-default">FAQ</a>
                                          <!--                                           <button class="btn btn-default dropdown-toggle dropdown-toggle-split d-none d-md-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                             <span class="sr-only">Toggle Dropdown</span>
                                             </button>
                                             <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Item</a>
                                             </div> -->

                                    </li>
                                    @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                                    <li class="nav-item">
                                       <i class="fa fa-search fa-custom button-search search-icon"></i>
                                    </li>

                                 </ul>

                              </div>
                           </nav>
                        </div>

                     </div>
                  </div>
<!--                   <div class="col-md-2" style="margin-top: 20px;">
                      <a href="faq.html" class="btn-faq">FAQ</a>
                  </div> -->
               </div>
            </div>
         </div>
      </header>
@yield('content')
      <footer>
        <div class="copy-r p-tb-100">
           <div class="container">
              <div class="row">
                 <div class="col-md-3">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="img-fluid">
                    <p>Our company is helping people deal with their changing lives by helping them make adjustments to keep hope alive.</p>
                    <h4>FOLLOW US</h4>
                    <ul class="list-inline">
                       <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/images/fb-img.png') }}" alt="facebook" class="img-fluid"></a></li>
                       <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/images/twitter-img.png') }}" alt="twitter" class="img-fluid"></a></li>
                       <li class="list-inline-item"><a href="#"><img src="{{ asset('assets/images/instagram-img.png') }}" alt="instagram" class="img-fluid"></a></li>
                    </ul>
                 </div>
                 <div class="col-md-3 pt-40">
                    <h4>QUICK LINKS</h4>
                    <p><a href="{{ route('homepage') }}">HOME</a></p>
                    <p><a href="">MESSAGE</a></p>
                    <p><a href="">REGISTRY</a></p>
                    <p><a href="">PROFILE</a></p>
                    <p><a href="#">MANAGE PROFILE</a></p>
                 </div>
                 <div class="col-md-3 pt-40">
                    <h4 style="visibility: hidden;">QUICK LINKS</h4>
                    <p><a href="">CONTACT US</a></p>
                    <p><a href="">FAQ</a></p>
<!--                      <p><a href="#">FAQ</a></p>
                    <p><a href="#">EVENTS</a></p>
                    <p><a href="#">MANAGE EVENTS</a></p> -->
                 </div>
                 <div class="col-md-3 pt-40">
                    <h4>SUGGESTIONS</h4>
                    <form action="" method="post">

                    <!--<p>Subscribe us for news letter and updates</p>-->
                    <input class="form-control subscribe-inp" type="text" name="suggestions_email" placeholder="Email">
                    <textarea class="form-control subscribe-inp" rows="5" id="comment" name="suggestions_text" placeholder="Suggestion"></textarea>
                    <button class="btn-send">SEND</button>
                    </form>
                 </div>
              </div>
           </div>
        </div>
        <div class="copyright">
           <p>© 2019 WHO CARES | All Rights Reserved</p>
        </div>
     </footer>
     <script src="{{asset('assets/js/jquery.min.js')}}"></script>
     <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
     <script src="{{asset('assets/js/css3-animate-it.js')}}"></script>
     <script src="{{asset('assets/js/custom.js')}}"></script>
  </body>
</html>

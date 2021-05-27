<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Dinner Club </title>


    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}


    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/global.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/ken-burns.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}" />
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap"
          rel="stylesheet">
          {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
          @yield('style')
          @yield('title')
  </head>

  <body>
      @section('navbar')
     <section id="header">
          <nav class="navbar navbar-default navbar-fixed-top">

                 <div class="navbar-header page-scroll">
                     <button type="button" class="navbar-toggle" data-toggle="collapse"
                             data-target="#bs-example-navbar-collapse-1">
                         <span class="sr-only">Toggle navigation</span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                     </button>
                     <div class="navbar-brand navbar-brand-centered ">
                         <a href="{{route('homePage.index')}}">
                              <img src="{{asset('images/final_logo.jpg')}}" class="logo ">
                         </a>
                     </div>

                  </div>

                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 <div>

                     <ul class="nav navbar-nav navbar">
                         <li><a href="{{route('homePage.index')}}">HOME</a></li>

                         <li><a href="{{route('reciepes.index')}}">RECIPES</a></li>

                         <li><a href="/offers_pgae">Offers</a></li>

                         @guest
                         <li><a href="{{route('login')}}">Sign in</a></li>

                         @endguest


@guest
<li><a href="{{route('sign.create')}}">Sign Up</a></li>
@endguest

                         <li><a href="{{route('reservation.create')}}"> Reserve Table </a></li>

@can('cart')

                         <li>
                             <a href="{{route('rcps.shoppingCart')}}">
                          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="20"
                              fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                              <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89
                              3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0
                              0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102
                              4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7
                              0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7
                              0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                          </svg>
                         <span class="badge text-warning cart_count">
                             {{Session::has('cart')?Session::get('cart')->totalQty:''}}
                        </span>
                            </a></li>
                            @endcan
@can('button')

                            <a class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <img alt="user-img" style="width:30px;border-radius:50%;left:1000px " class="avatar avatar-xl brround" src="{{asset('profiles')}}/{{Auth::user()->image}}">
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" id="dropdwon_options">
                                @can('front_reservation')

                              <li><a href="#">Reservation</a></li>
                              @endcan

                              @can('cart')

                              <li><a href="#"> cart</a></li>
                              @endcan

                              @can('dashboard')
                              <li><a href="{{route('dashbord')}}"> dashboard</a></li>

                              @endcan
                              @can('profile')
                              <li>


                              <li><a href="{{route('profile.show',Auth::id())}}">profile</a></li>
                              @endcan

                              @can('logout')
                                <li>
                                  <a  href="{{ route('logout') }}" class="style:text-align:center">
                                <form method="POST" style="display: none;">
                                    @csrf
                                    @method('get')
                                </form>
                          logout
                         </a>
                         </li>
                              @endcan

                            </ul>
                            @endcan

                          </div>
                     </ul>
                 </div>

             </div>
         </nav>
        </section>
@show


@yield('content')

<section id="footer">
    <div class="container">
     <div class="row">
      <div class="footer_1 clearfix">
       <div class="col-sm-4 col-md-2">
        <div class="footer_2">
         <h4>Home</h4>
         <ul>
              <li><a href="#">Our Range</a></li>
              {{-- <li><a href="#">From our kitchen</a></li> --}}
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms of Use</a></li>
         </ul>
        </div>
       </div>
       <div class="col-sm-4 col-md-3">
        <div class="footer_2">
         <h4>Favourites</h4>
         <ul>
              <li><a href="#">Chicken Recipes</a></li>
              <li><a href="#">Aloo Recipes</a></li>
              <li><a href="#">MAGGI Noodle Recipes</a></li>

         </ul>
        </div>
       </div>
       <div class="col-sm-4 col-md-2">
        <div class="footer_2">
         <h4>Recipes</h4>
         <ul>
              <li><a href="#">Palak Recipe</a></li>
              <li><a href="#">Matar Recipe</a></li>
              <li><a href="#">Chicken Recipe</a></li>
         </ul>
        </div>
       </div>
       <div class="col-sm-6 col-md-2">
        <div class="footer_2">
         <h4>Talk To Us</h4>
         <ul>
              <li><a href="#">Copyright</a></li>
              <li><a href="#">About Nestlé</a></li>
              <li><a href="#">Creating at Nestlé</a></li>

         </ul>
        </div>
       </div>

       <div class="col-sm-6 col-md-3">
        <div class="footer_3">
         <h4>Follow Us</h4>
         <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
         </ul>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
   <section id="footer_main" class="clearfix">
     <div class="footer_main_1">
         <p> © 2021 Dinner Club . All Rights Reserved . Design by Us  </p>
     </div>
   </section>

   <script src="{{asset('js/jquery-2.1.1.min.js')}}"></script>
   <script src="{{asset('js/bootstrap.min.js')}}"></script>
   <script src="{{asset('js/custom.js')}}"></script>


@yield('scripts')

</body>
</html>

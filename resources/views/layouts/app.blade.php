<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'RentMyRoom') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>

        <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>

		<script src="{{asset('js/jquery.min.js')}}"></script>
		
		<script src="{{asset('js/js/bootstrap.js')}}"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">

        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{asset('css/font-awesome-4.7.0/css/font-awesome.min.css')}}">

        <!--Style-->
        <link href="{{asset('css/bootstrap.min.css')}}" media="all" rel="stylesheet" type="text/css" />
		
        <style>
            .navbar-brand{
                font-family:"Curlz MT";
                font-size:22px;
                font-weight:bold;
            }
            .photo{
                font-family:"Curlz MT";
                font-size:28px;
                font-weight:bold;
            }
            }
            .errors{
                color:red;
            }
        </style>
    </head>
    <body>
                <nav class="nav navbar-expand-sm bg-light">
                    <button class= "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarToggle1">
                        <span class="fa fa-bars"></span>
                    </button>
                    <a href="/" class="navbar-brand ml-4" >RentMyRoom</a>
                    <div class="collapse navbar-collapse" id="navbarToggle1">

                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            <li>
                                <a href="/" class="nav-link"><i class="fa fa-search"></i> &nbsp;Search for Room</a>
                            </li>
                            <li>
                                <a href="/posts/create" class="nav-link"><i class="fa fa-bullhorn"></i> &nbsp;Offer a Room</a>
                            </li>
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link font-weight-bold" href="/posts"><i class="fa fa-ads"></i>&nbsp;View Ads</a>    
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-user"></i>&nbsp;{{ __('Login') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"><i class="fa fa-sign-in"></i>&nbsp;{{ __('Register') }}&nbsp;&nbsp;</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link font-weight-bold" href="/posts"><i class="fa fa-ads"></i>&nbsp;View Ads</a>    
                                </li>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/dashboard">Dashboard</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

                @yield('content')
                
        <!--footer-->
        <footer  id="footer1" class="navbar navbar-expand-lg bg-light  mt-auto">

            <div class="container">

                <footer class=" footer-left col-lg-4 nav-item ml-2" >
                    <STRONG>About Us</STRONG>
                        <div>
                            <label>
                                <a href="/aboutus">About RentMyRoom</a>
                            </label>
                        </div>
                        <div>
                            <label>
                                <a href="/howitworks">How RentMyRoom Works</a>
                            </label>
                        </div>
                </footer>

                <footer class="footer-center col-lg-4 nav-item ml-5"> 
                    <strong>Contact Us</strong>
                    <div>
                        <label class="text-primary">
                            <i class="fa fa-map-marker"></i>
                            <a class="nav-link" style="display:inline;" href="/location">&nbsp;Lalitpur, Nepal</a>
                        </label>
                    </div>
                    <div>
                        <label class="text-primary">
                            <i class="fa fa-envelope"></i> 
                            <a class="nav-link" style="display:inline;" href="#">Email Us</a>
                        </label>
                    </div>
                </footer>

                <footer class="footer-right col-lg-4 nav-item mb-4 ml-5"> 
                    <strong>Follow Us</strong>
                    <div>
                        <label>
                            <a href="#"><i class="fa fa-facebook-official fa-2x"></i></a>&nbsp;&nbsp;
                            <a href="#"><i class="fa fa-twitter fa-2x"></i></a>&nbsp;&nbsp;
                            <a href="#"><i class="fa fa-pinterest fa-2x"></i></a>
                        </label>
                    </div>
                </footer>
            
        </footer>
        @yield('scripts')
    </body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Clean Blog </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('front') }}/assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
        rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('front') }}/css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="{{ url('/') }}">{{$site_data->site_name}}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/posts') }}">News</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/contact') }}">Contact</a></li>
            
                    @guest
                    <li class="nav-item">
                        <a class="nav-link px-lg-3 py-3 py-lg-4" 
                           href="{{ route('login') }}" 
                           style="color: #fff; background-color: #007bff; font-weight: bold; border-radius: 5px; padding: 8px 15px; transition: all 0.3s ease;"
                           onmouseover="this.style.backgroundColor='#0056b3'" 
                           onmouseout="this.style.backgroundColor='#007bff'">
                            Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-lg-3 py-3 py-lg-4" 
                           href="{{ route('register') }}" 
                           style="color: #fff; background-color: #28a745; font-weight: bold; border-radius: 5px; padding: 8px 15px; transition: all 0.3s ease; margin-left: 10px;"
                           onmouseover="this.style.backgroundColor='#1e7e34'" 
                           onmouseout="this.style.backgroundColor='#28a745'">
                            Register
                        </a>
                    </li>
                    @endguest
                    @auth
                    <li class="nav-item">
                        <a class="nav-link px-lg-3 py-3 py-lg-4" 
                           href="{{ route('logout') }}" 
                           style="
                               color: #fff; 
                               background-color: #010101; 
                               font-weight: bold; 
                               border-radius: 5px; 
                               padding: 8px 15px; 
                               transition: all 0.3s ease;" 
                           onmouseover="this.style.backgroundColor='#2b2828'; this.style.color='#fff';" 
                           onmouseout="this.style.backgroundColor='#0f0a0a'; this.style.color='#fff';">
                            Logout
                        </a>
                    </li>
                    @endauth
                    
                </ul>
            </div>
            
        </div>
    </nav>

    @yield('content')

    <x-setting></x-setting>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('front') }}/js/scripts.js"></script>
</body>

</html>

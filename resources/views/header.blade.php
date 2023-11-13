<head>
    <meta charset="utf-8">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('content/icons/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('content/icons/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('content/icons/logo-180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('content/icons/logo-192.png') }}">
    <meta name="msapplication-TileImage" content="{{ asset('content/icons/logo-70.png') }}">
    <meta name="msapplication-TileColor" content="#FF4747">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link rel="manifest" href="{{ asset('manifest.json') }}">

    <style>
        ::selection {
            background-color: #FF4747;
            color: white;
        }

        .pulse:hover {
            animation: pulse-animation 1s;
        }

        .dropdown-item:hover {
            color: maroon;
        }

        .portfolio-dropdown:hover .portfolio-submenu {
            display: block;
        }

        .portfolio-dropdown {
            position: relative;
        }

        .portfolio-submenu {
            display: none;
            position: absolute;
            top: 0;
            left: 100%;
            margin-top: 0; /* Adjusted from -1px */
            background-color: #fff;
        }

        @keyframes pulse-animation {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }



        .img-header {
            width: 45px;
        }

        .h6-header {
            font-size: 17.5px;
        }

        @media (max-width: 375px) {
            .img-header {
                width: 30px;
            }

            .h6-header {
                font-size: 13px;
            }
            
            
        }
    </style>



</head>

<body>

    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only"></span>
        </div>
        <h3>&nbsp; Build Your Imagination...</h3>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center px-1 px-lg-4">
            <img src="{{ asset('content/icons/logo.png') }}" alt="" class="img-header">
            <h5 class="m-0 text-primary h5-header" style="font-family: 'Arimo', sans-serif;">&nbsp; &nbsp; TechRoLK <br>&nbsp; &nbsp; Engineering Solutions</h5>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{url('/')}}"
                    class="nav-item nav-link <?php if ($page === 'home') echo 'active'; ?> nav-link pulse">Home</a>
                <a href="{{ urldecode(url('/services')) }}"
                    class="nav-item nav-link nav-link pulse <?php if ($page === 'services') echo 'active'; ?>">Services</a>
                    <a href="{{ urldecode(url('/portfolio')) }}"
                    class="nav-item nav-link nav-link pulse <?php if ($page === 'portfolio') echo 'active'; ?>">Portfolio</a>

                 <!--   <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownPortfolios" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Portfolios
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownBooks">
                            @foreach ($books as $book)
                                <div class="portfolio-dropdown">
                                    <a class="dropdown-item" href="{{ url('/service', ['book_id' => $book->id]) }}">{{ $book->name }}</a>
                                    <div class="portfolio-submenu">
                                        @foreach ($book->portfolios as $portfolio)
                                            <a class="dropdown-item" href="{{ url('/portfolios', ['portfolio_id' => $portfolio->id]) }}">{{ $portfolio->title }}</a>
                                            <a class="dropdown-item" href="{{ url('/portfolio', ['portfolio_id' => $portfolio->id]) }}">{{ $portfolio->title }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>    -->

                    
                    <style>
  @media only screen and (max-width: 600px) {
    #mobile-shop-link {
      display: block;
    }
  }

  @media only screen and (min-width: 601px) {
    #mobile-shop-link {
      display: none;
    }
  }
</style>

<a href="https://techrolk.com/shop/" id="mobile-shop-link" class="nav-item nav-link nav-link pulse">Shop</a>




                   
                <a href="{{ urldecode(url('/about')) }}"
                    class="nav-item nav-link <?php if ($page === 'about') echo 'active'; ?> nav-link pulse">About Us</a>
                <a href="{{ urldecode(url('/contact')) }}"
                    class="nav-item nav-link <?php if ($page === 'contact') echo 'active'; ?> nav-link pulse">Contact</a>

                <a href="https://techrolk.com/shop/" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Shop<i
                        class="fa fa-arrow-right ms-3"></i></a>

            </div>
        </div>


    </nav>
    <!-- Navbar End -->
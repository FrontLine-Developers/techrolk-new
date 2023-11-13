<!DOCTYPE html>
<html lang="en">

<head>
    <title>Portfolio | TechRoLK Engineering Solutions</title>
    <?php
    $page = 'portfolio';
?>
    @include('header')

        <!-- Primary Meta Tags -->
        <meta name="title" content="Portfolio | TechRoLK Engineering Solutions" />
        <meta name="description" content="Explore our portfolio of innovative engineering solutions and discover how we transform ideas into reality." />
        <meta name="keywords" content="portfolio, innovative engineering solutions, Techrolk Engineering Solutions, Sri Lanka, mechatronics, robotics, drones, custom prototypes, cutting-edge technologies, experienced engineers, transforming ideas into reality" />

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://techrolk.com/portfolio" />
        <meta property="og:title" content="Portfolio | TechRoLK Engineering Solutions" />
        <meta property="og:description"
            content="Explore our portfolio of innovative engineering solutions and discover how we transform ideas into reality." />
        <meta property="og:image" content="{{ asset('content/img/cover.jpg') }}" />

        <!-- Twitter / WA / TG -->
        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:url" content="https://techrolk.com/portfolio" />
        <meta property="twitter:title" content="Portfolio | TechRoLK Engineering Solutions" />
        <meta property="twitter:description" content="Explore our portfolio of innovative engineering solutions and discover how we transform ideas into reality." />
        <meta property="twitter:image" content="{{ asset('content/img/cover.jpg') }}" />

    <style>
        .services-page-header {
            background: linear-gradient(rgba(56, 24, 24, 0.7), rgba(56, 24, 24, 0.7)), url(content/img/img-services/services-techrolk.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .services-page-header-inner {
            background: rgba(15, 23, 43, .7);
        }
    </style>


</head>

<body>

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 services-page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">OUR PROJECTS</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    @foreach ($portfolios as $portfolio)
    <div class="container-xxl py-5" id="drone-solutions">

        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3"></h6>
                <h1 class="mb-5">{{ $portfolio->title }}</h1>
            </div>

            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100" src="/uploadsP/{{$portfolio->image1}}" alt="{{$portfolio->title}}"
                                style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <p class="mb-4">{!! $portfolio->Sdescription !!}
                        </p>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="{{ route('showPortfolioInBook', ['portfolio' => str_replace(' ', '-', $portfolio->title)]) }}">Explore</a>


                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @endforeach

    

   



    @include('footer')
</body>

</html>

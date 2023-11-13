<!DOCTYPE html>
<html lang="en">

<head>
    <title>Services | TechRoLK Engineering Solutions</title>
    <?php
    $page = 'services';
?>
    @include('header')

    <!-- Primary Meta Tags -->
    <meta name="title" content="Services | TechRoLK Engineering Solutions" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:title" content="Services | TechRoLK Engineering Solutions" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />

    <!-- Twitter / WA / TG -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="" />
    <meta property="twitter:title" content="Services | TechRoLK Engineering Solutions" />
    <meta property="twitter:description" content="" />
    <meta property="twitter:image" content="" />

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
                    <h1 class="display-3 text-white animated slideInDown">OUR SERVICES</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    @foreach ($books as $book)
    <div class="container-xxl py-5" id="drone-solutions">

        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3"></h6>
                <h1 class="mb-5">{{ $book->name }}</h1>
            </div>

            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100" src="/uploads/{{$book->image}}" alt="Drone-Solutions"
                                style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <p class="mb-4">{!! $book->description !!}
                        </p>
                     <!--  <a class="btn btn-primary py-3 px-5 mt-2" href="{{ route('portfoliosByBook', ['book_id' => $book->id]) }}">Explore</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @endforeach
   
   
   



    @include('footer')
</body>

</html>
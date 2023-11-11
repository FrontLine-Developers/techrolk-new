<!DOCTYPE html>
<html lang="en">

<head>
    <title>Portfolio | TechRoLK Engineering Solutions</title>
    <?php
    $page = 'portfolio';
?>
    @include('header')

    <!-- Primary Meta Tags -->
    <meta name="title" content="portfolio | TechRoLK Engineering Solutions" />
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
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <p class="mb-4">{!! $portfolio->description !!}
                        </p>
                      
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
    <div class="position-relative h-100">
        @if ($portfolio->youtube_video_url)
            <iframe class="position-absolute w-100 h-100" src="{{ $portfolio->youtube_video_url }}"
                frameborder="0" allowfullscreen></iframe>
        @else
            <!-- Provide a default image or message when the YouTube video URL is not available -->
            <img class="img-fluid position-absolute w-100 h-100" src="/uploadsP/{{ $portfolio->image1 }}"
                alt="Drone-Solutions" style="object-fit: cover;">
        @endif
    </div>
</div>
                    
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        
        <div class="owl-carousel testimonial-carousel position-relative">
            
                @if ($portfolio->image1 || $portfolio->image2 || $portfolio->image3 || $portfolio->image4)
                    <div class="testimonial-item text-center">
                        @if ($portfolio->image1)
                            <img class="border rounded-custom p-2 mx-auto mb-3" src="/uploadsP/{{ $portfolio->image1 }}"
                                style="width: 340px; height: 340px;">
                        @endif
                    </div>

                    <div class="testimonial-item text-center">
                        @if ($portfolio->image2)
                            <img class="border rounded-custom p-2 mx-auto mb-3" src="/uploadsP/{{ $portfolio->image2 }}"
                                style="width: 340px; height: 340px;">
                        @endif
                    </div>
                    @if ($portfolio->image3)
                    <div class="testimonial-item text-center">
                        
                            <img class="border rounded-custom p-2 mx-auto mb-3" src="/uploadsP/{{ $portfolio->image3 }}"
                                style="width: 340px; height: 340px;">
                       
                    </div>
                    @endif
                    @if ($portfolio->image4)
                    <div class="testimonial-item text-center">
                        
                            <img class="border rounded-custom p-2 mx-auto mb-3" src="/uploadsP/{{ $portfolio->image4 }}"
                                style="width: 340px; height: 340px;">
                       
                    </div>
                    @endif
                @endif
           
        </div>
    </div>
</div>
    @endforeach
   

<!---->


            
            
        </div>
    </div>
</div>
   



    @include('footer')
</body>

</html>
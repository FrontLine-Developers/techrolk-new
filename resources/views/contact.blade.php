<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <title>Contact  | TechRoLK Engineering Solutions</title>
        <?php
    $page = 'contact';
?>

        <!-- Primary Meta Tags -->
        <meta name="title" content="Contact | TechRoLK" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="" />
        <meta property="og:title" content="Contact | TechRoLK" />
        <meta property="og:description"
            content="Contact Prince of Wales College for information, admissions, and inquiries. Reach out to us today for a brighter educational future." />
        <meta property="og:image" content="" />

        <!-- Twitter / WA / TG -->
        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:url" content="" />
        <meta property="twitter:title" content="Contact | TechRoLK" />
        <meta property="twitter:description" content="" />
        <meta property="twitter:image" content="" />

        @include('header')



        <style>
            .contact-page-header {
                background: linear-gradient(rgba(56, 24, 24, 0.7), rgba(56, 24, 24, 0.7)), url(content/img/contact-header.jpeg);
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .contact-page-header-inner {
                background: rgba(15, 23, 43, .7);
            }
        </style>

    </head>


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 contact-page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">CONTACT</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
                <h1 class="mb-5">Contact For Any Query</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h5>Get In Touch</h5>
                    <p class="mb-4">Wish to enquire about admissions or anything else?
                        You can walk in during office hours, give us a call or simply submit the form here.</p>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
                            style="width: 50px; height: 50px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Tel</h5>
                            <p class="mb-0">+94761943645</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
                            style="width: 50px; height: 50px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Address</h5>
                            <p class="mb-0">159/48C, Temple Road, Maharagama,Colombo, Sri Lanka ZIP 10280</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
                            style="width: 50px; height: 50px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Email</h5>
                            <p class="mb-0">techrolk.sales@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253524.9116035585!2d79.64809068671872!3d6.851380600000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae245b23ce15407%3A0x2879ad950f962e52!2sTechRoLK!5e0!3m2!1sen!2slk!4v1697803043732!5m2!1sen!2slk"
                        frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
                    <div class="elfsight-app-357d0125-fc93-448d-9ac8-83277304edc3"></div>
                </div>
            </div>

        </div>

    </div>
    <!-- Contact End -->




    @include('footer')

    </body>

</html>
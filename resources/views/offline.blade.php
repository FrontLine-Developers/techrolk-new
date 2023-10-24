<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>You are offline</title>
    
    <?php
    $page = '';
?>

@include('header')

<head>


    <!-- offline Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-cloud-slash display-1 text-primary"></i>
                    <h1 class="display-1">Oops!</h1>
                    <h1 class="mb-4">You're Offline</h1>
                    <p class="mb-4">We're sorry, but it seems like you're currently offline. Please check your internet connection and try again later.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- offline End -->
        
    @include('footer')

</body>

</html>
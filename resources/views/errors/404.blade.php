<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>404 Page Not Found</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <?php
    $page = '';
?>

<script>
  // Get the current URL.
  var currentUrl = window.location.href;

  // Check if the URL contains the `/public` segment.
  if (currentUrl.indexOf('/public/') >= 0) {
    // Remove the `/public` segment from the URL.
    var correctedUrl = currentUrl.replace('/public', '');

    // Redirect the user to the corrected URL.
    window.location.href = correctedUrl;
  }
</script>

    @include('header')



</head>


    <!-- 404 Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4">Page Not Found</h1>
                    <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website.</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="{{url('/')}}">Go Back To Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->
        
    @include('footer')

</body>

</html>
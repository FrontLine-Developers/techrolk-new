<!DOCTYPE html>
<html>

<head>

    @include('shop.shop_header')

    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <title>Product Name │ TechRoLK Engineering Solutions</title>



</head>

<body>
    <br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div id="productCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="product-image1.jpg" alt="Product Image 1" class="img-fluid">
                    </div>
                    <div class="carousel-item">
                        <img src="product-image2.jpg" alt="Product Image 2" class="img-fluid">
                    </div>
                    <div class="carousel-item">
                        <img src="product-image3.jpg" alt="Product Image 3" class="img-fluid">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <h2>Product Name</h2>
            <p>Category: Drones</p>
            <p>Product Description: This is a detailed description of the product. You can provide information about its features, specifications, and more.</p>
            <p>Price: $99.99</p>
            <p>Availability: In Stock</p>
            <p>Rating: 4.5/5</p>

            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control" id="quantity" value="1">
            </div>

            <button class="btn btn-primary">Add to Cart</button>
        </div>
    </div>
</div>

        <br>


        <section class="section-content padding-bottom-sm">
<div class="container">

<header class="section-heading">
	<h3 class="section-title">Recommended</h3>
</header><!-- sect-heading -->

<div class="row">
	<div class="col-md-3">
		<div href="#" class="card card-product-grid">
			<a href="#" class="img-wrap"> <img src="images/items/1.jpg"> </a>
			<figcaption class="info-wrap">
				<a href="#" class="title">Just another product name</a>
				<div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
			</figcaption>
		</div>
	</div> <!-- col.// -->
	<div class="col-md-3">
		<div href="#" class="card card-product-grid">
			<a href="#" class="img-wrap"> <img src="images/items/2.jpg"> </a>
			<figcaption class="info-wrap">
				<a href="#" class="title">Some item name here</a>
				<div class="price mt-1">$280.00</div> <!-- price-wrap.// -->
			</figcaption>
		</div>
	</div> <!-- col.// -->
	<div class="col-md-3">
		<div href="#" class="card card-product-grid">
			<a href="#" class="img-wrap"> <img src="images/items/3.jpg"> </a>
			<figcaption class="info-wrap">
				<a href="#" class="title">Great product name here</a>
				<div class="price mt-1">$56.00</div> <!-- price-wrap.// -->
			</figcaption>
		</div>
	</div> <!-- col.// -->
	<div class="col-md-3">
		<div href="#" class="card card-product-grid">
			<a href="#" class="img-wrap"> <img src="images/items/4.jpg"> </a>
			<figcaption class="info-wrap">
				<a href="#" class="title">Just another product name</a>
				<div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
			</figcaption>
		</div>
	</div> <!-- col.// -->
</div> <!-- row.// -->

</div> <!-- container .//  -->
</section>

    <!-- footer start -->
    @include('shop.shop_footer')

    <!-- footer end -->

</body>

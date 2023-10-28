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
    <div class="hero_area">


        <div class="col-sm-6 col-md-4 col-lg-4" style="margin:auto; width:50%; padding:3px">

            <div class="img-box" style="padding:20px">
                <img src="shop-content/img/products/test.webp">
            </div>
            <div class="detail-box">
                <h5>
Drone for Sale
                </h5>
                <h6 style="color:red;">
                    Local price: 1000LKR
                </h6>
                <h6 style="color:blue;">
                    USD: 10$
                </h6>
                <h6>Product Catagory : </h6>
                <h6>Product Details : </h6>
                <h6>Available Quantity : </h6>
                <form action="" method="Post">
                    @csrf
                    <div class="row">
                        <div class="col-md-4"> <input type="number" name="quantity" value="1" min="1"
                                style="width:80px;"></div>
                        <div class="col-md-4">
                            <input type="submit" value="Add To Cart"></div>

                    </div>


                </form>
            </div>
        </div>
    </div>
    <!-- footer start -->
    @include('shop.shop_footer')

    <!-- footer end -->

</body>

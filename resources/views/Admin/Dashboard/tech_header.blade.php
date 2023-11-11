<?php

//header.php

?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>TechRoLK - Admin Pannel</title>
    <link rel="canonical" href="">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../adm/tech_admin_dashboard/css/styles.css">
    <link rel="stylesheet" href="../adm/tech_admin_dashboard/css/simple-datatables-style.css">
    <link rel="stylesheet" href="../adm/tech_admin_dashboard/css/select2.min.css">
    <link rel="stylesheet" href="../adm/tech_admin_dashboard/css/vanillaSelectBox.css">
    <!-- -->
    <link rel="stylesheet" type="text/css" href="https://jhollingworth.github.io/bootstrap-wysihtml5//lib/css/bootstrap.min.css"></link>
    <link rel="stylesheet" type="text/css" href="https://jhollingworth.github.io/bootstrap-wysihtml5//lib/css/prettify.css"></link>
    <link rel="stylesheet" type="text/css" href="https://jhollingworth.github.io/bootstrap-wysihtml5//src/bootstrap-wysihtml5.css"></link>
    <!-- icons -->
    <link rel="icon" href="../images/logo main.ico">
    <meta name="theme-color" content="#7952b3">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        ::selection {
            background-color: #ff0000;
            color: #ffffff;
        }


    </style>

</head>


<body class="sb-nav-fixed">

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="{{url('new/Dashboard')}}"><img src="../images/logo main.png" alt="" width="35px">&nbsp &nbsp
            TechRoLK - Admin Blog Pannel</a>
    </nav>


        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <br>
                            <a class="nav-link" href="{{url('dashboard/index')}}"><img src="../adm/tech_admin_dashboard/ion-icon/dashboard.png" width="20px">&nbsp Dashboard</a>
                            <a class="nav-link" href="{{url('dashboard/services')}}"><img src="../adm/tech_admin_dashboard/ion-icon/order.png" width="20px">&nbsp Services</a>
                            <a class="nav-link" href="{{url('dashboard/Portfolio')}}"><img src="../adm/tech_admin_dashboard/ion-icon/products.png" width="20px">&nbsp Portfolio</a>
                           <!-- <a class="nav-link" href="{{url('new/Category')}}"><img src="../adm/tech_admin_dashboard/ion-icon/categories.png" width="20px">&nbsp Categories</a>
                            <a class="nav-link" href="{{url('new/SubCategory')}}"><img src="../adm/tech_admin_dashboard/ion-icon/subcat.png" width="20px">&nbsp Subcategories</a>
                            <a class="nav-link" href="{{url('new/Brands')}}"><img src="../adm/tech_admin_dashboard/ion-icon/brands.png" width="20px">&nbsp Brands</a>
                            <a class="nav-link" href="{{url('new/Users')}}"><img src="../adm/tech_admin_dashboard/ion-icon/users.png" width="20px">&nbsp Users</a>
                            <br>
                            <a class="nav-link" href="{{url('new/Profile')}}"><img src="../adm/tech_admin_dashboard/ion-icon/adminprofile.png" width="20px">&nbsp Profile</a> 
                            <a class="nav-link" href="{{url('new/Settings')}}"><img src="../adm/tech_admin_dashboard/ion-icon/settings.png" width="20px">&nbsp Settings</a>--> 
                            
                           <!-- <a class="nav-link" href="{{url('new/Logout')}}"><img src="../adm/tech_admin_dashboard/ion-icon/logout.png" width="20px">&nbsp Logout</a> -->

                           <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <img src="../adm/tech_admin_dashboard/ion-icon/logout.png" width="20px">&nbsp Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                           
                          
                          
                             <!-- @auth
                               Add this within the authenticated user section 
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit">Logout</button>
                                </form>
                            @endauth-->






<!---->
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                       
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>

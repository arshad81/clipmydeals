<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkMyDeals</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./assets/css/main.min.css">
</head>
<script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

<body>
    <header class="position-relative" style="position: relative;">
        <nav class="navbar bg-light justify-content-xxl-evenly position-relative">
            <img src="./assets/images/logo/logo.png" alt="logo">

            <!-- Navbar -->
            <div class=" flex-md-grow-1 flex-lg-grow-0" id="navbarSupportedContent">
                <ul class="navbar nav flex-md-grow-0 justify-content-md-evenly justify-content-xl-center px-md-1  mx-xl-4">
                    <li class="nav-item d-none d-xxl-block mx-xl-3">
                        <a href="#">Home</a>
                    </li>
                    <li class="nav-item d-none d-lg-block mx-lg-3 position-relative my-2">
                        <a id="coupon-theme-nav" class="coupon-theme nav-anchor" href="#">Coupon Theme <img src="./assets/images/icons/down-arrow.svg" alt="Down Arrow">
                        </a>
                        <!-- Dropdown -->
                        <section class="position-absolute bg-transparent coupon-theme-dropdown dropdown-menu d-none" style="top:10px">
                            <div class=" d-flex justify-content-evenly bg-light py-3 rounded-4" style="width: 500px; margin-top: 40px;">
                                <ul class="px-0">
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/layout.svg" width="24px" alt="Layout">layouts
                                        </a>
                                    </li>
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/homepage-style.svg" width="24px" alt="Homepage">Homepage
                                            styles
                                        </a>
                                    </li>
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/mobile-application.svg" width="24px" alt="Mobile App">Mobile
                                            Application
                                        </a>
                                    </li>
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/cashback-plugin.svg" width="24px" alt="cashback-plugin">Cashback
                                            Plugin
                                        </a>
                                    </li>
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/down-arrow.svg" width="24px" alt="Down Arrow">Coupon
                                            Feeds
                                        </a>
                                    </li>
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/preset colors.svg" width="24px" alt="preset colors">Preset
                                            Colors
                                        </a>
                                    </li>
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/widgets.svg" width="24px" alt="widgets">Widgets
                                        </a>
                                    </li>
                                </ul>
                                <ul class="px-0">
                                    <li class="dropdown-item px-0 px-0">
                                        <a class="nav-anchor  px-0" href="#"><img class="mx-0 me-3 px-0" src="./assets/images/icons/customization.svg" width="24px" alt="customization">Customization
                                        </a>
                                    </li>
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/webpush-notification.svg" width="24px" alt="webpush-notification">Web Push
                                            Notification
                                        </a>
                                    </li>
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/printable-vouchers.svg" width="24px" alt="printable-vouchers">Printable
                                            Vouchers
                                        </a>
                                    </li>
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/multi-location.svg" width="24px" alt="multi-location">Multi
                                            Location
                                        </a>
                                    </li>
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/social-media-optimized.svg" width="24px" alt="social-media-optimized">Social
                                            media
                                            optimized
                                        </a>
                                    </li>
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/HD-graphics.svg" width="24px" alt="HD-graphics">HD
                                            Graphics
                                        </a>
                                    </li>
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/Others.svg" width="24px" alt="Other">Other
                                            Features
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </li>
                    <li class="nav-item d-none d-lg-block mx-lg-3 position-relative my-2">
                        <a class="nav-anchor" href="#">Comparison Plugin <img src="./assets/images/icons/down-arrow.svg" alt="Down Arrow">
                        </a>
                        <!-- Dropdown -->
                        <section class="position-absolute bg-transparent coupon-theme-dropdown dropdown-menu d-none" style="top:10px">
                            <div class=" d-flex justify-content-evenly bg-light py-3 rounded-4" style="width: 500px; margin-top: 40px;">
                                <ul class="px-0">
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/layout.svg" width="24px" alt="layout">Layouts
                                        </a>
                                    </li>
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/homepage-style.svg" width="24px" alt="homepage-style">Homepage
                                            styles
                                        </a>
                                    </li>
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/android.svg" width="24px" alt="android">Android
                                            Application
                                        </a>
                                    </li>
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/cashback-plugin.svg" width="24px" alt="cashback-plugin">Cashback
                                            Plugin
                                        </a>
                                    </li>
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/HD-graphics.svg" width="24px" alt="HD-graphics">HD
                                            Graphics
                                        </a>
                                    </li>
                                </ul>
                                <ul class="px-0">
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/.svg" width="24px" alt="preset-colors">Preset
                                            Colors
                                        </a>
                                    </li>
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/customization.svg" alt="customization">Customization
                                        </a>
                                    </li>
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/social-media-optimized.svg" width="24px" alt="social-media-optimized">Social
                                            Media
                                            Optimized
                                        </a>
                                    </li>
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/widgets.svg" width="24px" alt="widgets">Widgets
                                        </a>
                                    </li>
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/Others.svg" width="24px" alt="Others">Other
                                            Featrues
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </li>
                    <li class="nav-item d-none d-lg-block mx-lg-3 position-relative my-2">
                        <a class="nav-anchor" href="#">Cashback Plugin <img src="./assets/images/icons/down-arrow.svg" alt="Down Arrow">
                        </a>
                        <!-- Dropdown -->
                        <section class="position-absolute bg-transparent coupon-theme-dropdown dropdown-menu d-none" style="top:10px">
                            <div class=" d-flex justify-content-evenly py-3 rounded-4 bg-light" style="width: 425px; margin-top: 40px;">
                                <ul class="px-0 ">
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/down-arrow.svg" width="24px" alt="Down Arrow">How it
                                            works
                                        </a>
                                    </li>
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/down-arrow.svg" width="24px" alt="Down Arrow">Reports
                                        </a>
                                    </li>
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/down-arrow.svg" width="24px" alt="Down Arrow">Affiliate
                                            Networks
                                        </a>
                                    </li>
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/down-arrow.svg" width="24px" alt="Down Arrow">Rewards
                                            & bonuses
                                        </a>
                                    </li>
                                </ul>
                                <ul class="px-0">
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/down-arrow.svg" width="24px" alt="Down Arrow">Insights
                                        </a>
                                    </li>
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0  me-3" src="./assets/images/icons/down-arrow.svg" width="24px" alt="Down Arrow">Cashback
                                            Formulae
                                        </a>
                                    </li>
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0  me-3" src="./assets/images/icons/down-arrow.svg" width="24px" alt="Down Arrow">Payout
                                            Management
                                        </a>
                                    </li>
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0  me-3" src="./assets/images/icons/down-arrow.svg" width="24px" alt="Down Arrow">Login
                                            Prompts
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </li>
                    <li class="nav-item d-none d-xxl-block mx-xl-3 position-relative my-2">
                        <a class="nav-anchor" href="#">Add Ons <img src="./assets/images/icons/down-arrow.svg" alt="Down Arrow"></a>
                        <!-- Dropdown -->
                        <section class="position-absolute bg-transparent coupon-theme-dropdown dropdown-menu d-none" style="top:10px">
                            <div class=" d-flex justify-content-evenly bg-light py-3 rounded-4" style="width: 250px; margin-top: 40px;">
                                <ul class="px-0">
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/down-arrow.svg" width="24px" alt="Down Arrow">Browser
                                            Extension
                                        </a>
                                    </li>
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/down-arrow.svg" width="24px" alt="Down Arrow">Android
                                            Application
                                        </a>
                                    </li>
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/down-arrow.svg" width="24px" alt="Down Arrow">iOS
                                            Appplication
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </li>
                    <li class="nav-item d-none d-xxl-block mx-xl-3 position-relative my-2 ">
                        <a class="nav-anchor" href="#">Demo <img src="./assets/images/icons/down-arrow.svg" alt="Down Arrow">
                        </a>
                        <!-- Dropdown -->
                        <section class="position-absolute bg-transparent coupon-theme-dropdown dropdown-menu d-none" style="top:10px">
                            <div class=" d-flex justify-content-evenly bg-light py-3 rounded-4" style="width: 250px; margin-top: 40px;">
                                <ul class="px-0">
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/Demo.svg" width="24px" alt="Down Arrow">Live Demo
                                        </a>
                                    </li>
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/down-arrow.svg" width="24px" alt="Down Arrow">Backend
                                            Screenshot
                                        </a>
                                    </li>
                                    <li class="dropdown-item px-0">
                                        <a class="nav-anchor" href="#"><img class="mx-0 me-3" src="./assets/images/icons/down-arrow.svg" width="24px" alt="Down Arrow">Youtube
                                            Tutorials
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </li>
                    <li class="nav-item d-none d-xxl-block mx-xl-3">
                        <a href="#">Docs</a>
                    </li>
                    <li class="nav-item d-none d-xxl-block mx-xl-3">
                        <a class="nav-anchor" href="#"> <img class="mx-1" src="./assets/images/icons/login.svg" alt="Login">
                            Login</a>
                    </li>
                </ul>
            </div>
            <!--  -->
            <!-- Buy Now Icon and Sidebar -->
            <div>
                <button class="btn btn-primary mx-4"> <img class="me-1" src="./assets/images/icons/buy-now-icon.svg" alt="buy-now" width="14px"> Buy Now</button>
                <img class="d-xxl-none" src="./assets/images/icons/hamburger-icon.svg" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar-div" aria-controls="sidebar-div">
                <div class="offcanvas offcanvas-end " tabindex="-1" id="sidebar-div" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header d-block">
                        <img type="button" src="./assets/images/icons/hamburger-icon.svg" class="float-end" data-bs-dismiss="offcanvas" aria-label="Close">
                    </div>
                    <div class="offcanvas-body d-flex flex-column justify-content-between ">
                        <ul class="list-unstyled my-3">
                            <li class="sidebar-li">
                                <a href="#" class="text-custom-gray"><img class="mx-3 home-icon" src="./assets/images/icons/home-101.svg" width="24px" alt="home"> Home</a>
                            </li>
                            <li class="sidebar-li my-3">
                                <a class="text-custom-gray" href="#"> <img class="mx-3" src="./assets/images/icons/coupon theme.svg" width="24px" alt="home"> Coupon
                                    Theme
                                </a>
                            </li>
                            <li class="sidebar-li my-3">
                                <a class="text-custom-gray" href="#"><img class="mx-3" src="./assets/images/icons/comparison-plugin.svg" width="24px" alt="home">
                                    Comparison Plugin
                                </a>
                            </li>
                            <li class="sidebar-li my-3">
                                <a class="text-custom-gray" href="#"><img class="mx-3" src="./assets/images/icons/Cashback-plugin-w.svg" width="24px" alt="home">
                                    Cashback
                                </a>
                            </li>
                            <li class="sidebar-li my-3">
                                <a class="text-custom-gray" href="#"><img class="mx-3" src="./assets/images/icons/add_ons_new.svg" width="24px" alt="home"> Add Ons
                                </a>
                            </li>
                            <li class="sidebar-li my-3">
                                <a class="text-custom-gray" href="#"><img class="mx-3" src="./assets/images/icons/Demo.svg" width="24px" alt="home"> Demo
                                </a>
                            </li>
                            <li class="sidebar-li my-3">
                                <a class="text-custom-gray" href="#"><img class="mx-3" src="./assets/images/icons/Docs.svg" width="24px" alt="home"> Docs
                                </a>
                            </li>
                            <li class="sidebar-li my-3">
                                <a class="text-custom-gray" href="#"><img class="mx-3" src="./assets/images/icons/logout.svg" width="24px" alt="home"> Login
                                </a>
                            </li>
                        </ul>
                        <section class="text-center mb-3">
                            <img class="mx-auto mb-4" src="./assets/images/icons/Main logo-01.svg" width="112px" alt="logo">
                            <p class="my-0 h6 mb-2 fs-7 text-custom-gray">&#169 2018-2022 - All Rights Reserved</p>
                            <p class="my-0 h6 fs-7 text-custom-gray"><img class="me-2" src="./assets/images/icons/location white.svg" width="18px" alt="">120, High Road, East Finchley,
                                N2 9ED, London, UK.</p>
                        </section>
                    </div>
                </div>
            </div>
        </nav>

        </div>
    </header>
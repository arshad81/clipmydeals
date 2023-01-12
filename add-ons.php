<?php include './header.php' ?>
<div class="card bg-dark text-white rounded-0 hp-slider">
    <div class="coupon-theme-slider coupon-theme-slider-gradient">
        <img src="./assets/images/add-ons/desktop/Web-CMD-home-screen-internal-banners-unique-features-min.jpg" srcset=" ./assets/images/add-ons/desktop/Web-CMD-home-screen-internal-banners-unique-features-min.jpg 1800w, ./assets/images/add-ons/tab/Tab-CMD-home-screen-banners-18-min.jpg 1199w, ./assets/images/add-ons/mobile/addons-mobile-banner.png 995w" width="1920" height="875" class=" w-100 h-auto " alt="add ons banner">
    </div>
    <div class="card-img-overlay container-lg d-flex flex-column justify-content-center">
        <p class="card-title h1 fs-md-3rem mx-auto mt-4 text-custom-white text-center">The unique features <br> we offer as add-ons</p>
        <div class="d-flex justify-content-center my-md-3">
            <button class="btn btn-primary mx-2 px-sm-3 py-sm-2 px-md-4 py-md-3"> <img class="me-1" src="./assets/images/icons/buy-now-icon.svg" alt="buy-now" width="14" height="14"> Buy Now</button>
        </div>
    </div>
</div>
<section class="container-xxl">
    <?php include './components/android-app.php' ?>
</section>
<section class="container-xl ">
    <?php
    include './components/browser-extension.php';
    include './components/price-comparison.php';
    include './components/coupons-deals.php';
    include './components/cashback.php';

    ?>

    <div class="card mb-3 shadow shadow-md-none mt-3">
        <div class="row align-items-center rounded-4 my-4 justify-content-around justify-content-md-between">
            <div class="col-12 col-sm-10 col-md-6 mx-auto order-md-1">
                <img src="./assets/images/add-ons/mobile/Mobile-view-card-price-comparison-new.png" width="613" height="400" class="w-100 h-auto" alt="...">
            </div>
            <div class="col-12 col-sm-10 col-md-6 order-md-0">
                <div class="card w-100  shadow-md rounded-3 px-4 py-md-5 ">
                    <div class="card-body mx-auto px-2">
                        <p class="card-title h6 fs-md-3">Price Comparison</p>
                        <p class="card-text h4 fw-light lh-base fs-md-5 mt-lg-3 mb-md-5 pe-0">If you install our Price Comparison Plugin, the browser extension can even alert your visitor's about a better price on other stores. Even if the price is same, a comparison notification may persuade visitor's to buy from stores with higher cashback or simply better reputation.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<?php include './components/launch.php' ?>
<?php include './footer.php' ?>
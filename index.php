<?php
include "./header.php"; ?>
<div id="imageCarousel" class="carousel slide carousel-fade position-relative" data-bs-ride="carousel">
    <div class="carousel-indicators ">
        <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner ">
        <div class="carousel-item active">
            <img src="./assets/images/mobile-version-image-1.jpg" class="d-block d-md-none w-100 opacity-100" width="360px" alt="...">
            <img src="./assets/images/Tab-Banner-1.jpg" class="d-none d-md-block w-100 " alt="...">
            <div class="position-absolute top-0 start-50 translate-middle-x  w-100">
                <p class="h1 title text-custom-white text-center text-md-start mx-auto mt-4 lh-sm carousel-text ">The Most comprehensive affiliate theme for Wordpress</h1>
                <div class="d-flex justify-content-center mt-6p ">
                    <button class="btn btn-outline-light mx-2 outline-custom-btn"> <img class="me-1 " src="./assets/images/icons/btn-video.svg" alt="buy-now" width="14px"> Watch Video</button>
                    <button class="btn btn-primary mx-2"> <img class="me-1" src="./assets/images/icons/buy-now-icon.svg" alt="buy-now" width="14px"> Buy Now</button>
                </div>
                <div class="mt-sm-3">
                    <div class="d-flex justify-content-center flex-sm-column align-items-center  mx-sm-auto mt-3">
                        <div class="glassmorphism-text-div mx-1 d-flex py-1 align-items-center mb-sm-1">
                            <img class="mx-1 mx-sm-3" src="./assets/images/icons/banner-android-icon.svg" width="24px" alt="">
                            <p class="text-light m-0 mx-1 fs-6">FREE Android App (White Labelled App worth ₹4000 for your website) </p>
                        </div>
                        <div class="glassmorphism-text-div mx-1 d-flex p-1 align-items-center mb-sm-1">
                            <img class="mx-1 mx-sm-3" src="./assets/images/icons/banner-android-icon.svg" width="24px" alt="">
                            <p class="text-light m-0 mx-1  fs-6">FREE CouponAPI Voucher (Get ₹2200 OFF on couponapi.org) </p>
                        </div>
                    </div>
                    <p class="text-light text-center mt-2 fs-6 mt-sm-3">*FREE products are only for purchases before 6th November 2022</p>
                </div>
            </div>
        </div>
        <!-- <div class="carousel-item">
        <img src="./assets/images/mobile-version-images-2.jpg" class="d-block d-md-none w-100 opacity-100" width="360px" alt="...">
            <img src="./assets/images/tab-size-banner-2.jpg" class="d-none d-md-block w-100 " alt="...">
            <div class="position-absolute top-0 start-50 translate-middle-x  w-100">
                <p class="h1 text-custom-white text-center text-md-start mx-auto mt-4 lh-sm carousel-text">High featured android application specially made for you!</h1>
                <div class="d-flex justify-content-center mt-6p ">
                    <button class="btn btn-outline-light mx-2"> <img class="me-1" src="./assets/images/icons/btn-video.svg" alt="buy-now" width="14px"> Watch Video</button>
                    <button class="btn btn-primary mx-2"> <img class="me-1" src="./assets/images/icons/buy-now-icon.svg" alt="buy-now" width="14px"> Buy Now</button>
                </div>
                <div>
                    <div class="d-flex justify-content-center mt-3">
                        <div class="glassmorphism-text-div w-9rem border border-2  border-primary mx-1  d-flex py-1 align-items-center">
                            <img class="mx-1" src="./assets/images/icons/banner-android-icon.svg" width="24px" alt="">
                            <p class="text-light m-0 mx-1  fs-6">FREE Android App (White Labelled App worth ₹4000 for your website) </p>
                        </div>
                        <div class="glassmorphism-text-div w-9rem mx-1 py-1 d-flex align-items-center">
                            <img class="mx-1" src="./assets/images/icons/banner-android-icon.svg" width="24px" alt="">
                            <p class="text-light m-0 mx-1  fs-6">FREE CouponAPI Voucher (Get ₹2200 OFF on couponapi.org) </p>
                        </div>
                    </div>
                    <p class="text-light text-center mt-2 fs-6">*FREE products are only for purchases before 6th November 2022</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
        <img src="./assets/images/mobile-version-images-3.jpg" class="d-block d-md-none w-100 opacity-100" width="360px" alt="...">
            <img src="./assets/images/tab-size-banner-3.jpg" class="d-none d-md-block w-100 " alt="...">
            <div class="position-absolute top-0 start-50 translate-middle-x  w-100">
                <p class="h1 text-custom-white text-center text-md-start mx-auto mt-4 lh-sm carousel-text">Single API to get Coupons from all Affiliate Programs</h1>
                <div class="d-flex justify-content-center mt-6p">
                    <button class="btn btn-outline-light mx-2"> <img class="me-1" src="./assets/images/icons/btn-video.svg" alt="buy-now" width="14px"> Watch Video</button>
                    <button class="btn btn-primary mx-2"> <img class="me-1" src="./assets/images/icons/buy-now-icon.svg" alt="buy-now" width="14px"> Buy Now</button>
                </div>
                <div>
                    <div class="d-flex justify-content-center mt-3">
                        <div class="glassmorphism-text-div w-9rem mx-1  d-flex py-1 align-items-center">
                            <img class="mx-1" src="./assets/images/icons/banner-android-icon.svg" width="24px" alt="">
                            <p class="text-light m-0 mx-1  fs-6">FREE Android App (White Labelled App worth ₹4000 for your website) </p>
                        </div>
                        <div class="glassmorphism-text-div w-9rem border border-2  border-primary mx-1 py-1 d-flex align-items-center">
                            <img class="mx-1" src="./assets/images/icons/banner-android-icon.svg" width="24px" alt="">
                            <p class="text-light m-0 mx-1  fs-6">FREE CouponAPI Voucher (Get ₹2200 OFF on couponapi.org) </p>
                        </div>
                    </div>
                    <p class="text-light text-center mt-2 fs-6">*FREE products are only for purchases before 6th November 2022</p>
                </div>
            </div>
        </div> -->
        </div>
    </div>
</div>

<?php
include "./footer.php"
?>
<?php
include "./header.php"; ?>
<div id="imageCarousel" class="carousel slide carousel-fade position-relative" data-bs-ride="carousel">

    <div class="carousel-inner ">
        <div class="carousel-item active">
            <img src="./assets/images/mobile-version-images6.jpg" class="d-block d-md-none w-100" width="360px" alt="...">
            <img src="./assets/images/Tab-Banner-1.jpg" class="d-none d-md-block d-lg-none w-100" alt="...">
            <img src="./assets/images/Webview-banner-new.jpg" class="d-none d-lg-block w-100" alt="...">
            <div class="position-absolute top-0 start-50 translate-middle-x w-100 w-xl-93 mt-xxl-5 ">
                <p class="h1 fs-xxl-xl title text-custom-white text-center text-lg-start w-85 mw-30rem mw-xxl-46rem mx-auto mx-lg-5 mt-4 lh-sm mt-sm-5 mt-lg-4 mt-xl-6p w-xxl-50 mt-xxl-0 ms-xxl-3 mt-xxl-5">The Most comprehensive affiliate theme for Wordpress</h1>
                <div class="d-flex justify-content-center mt-6p mt-lg-4 justify-content-lg-start mx-lg-5 w-xl-93 mt-xl-5 mt-xxl-5 ms-xxl-3">
                    <button class="btn btn-outline-light mx-2 outline-custom-btn px-sm-3 py-sm-2 px-xl-4 py-xl-3"> <img class="me-1 " src="./assets/images/icons/btn-video.svg" alt="buy-now" width="14px"> Watch Video</button>
                    <button class="btn btn-primary mx-2 px-sm-3 py-sm-2 px-xl-4 py-xl-3"> <img class="me-1" src="./assets/images/icons/buy-now-icon.svg" alt="buy-now" width="14px"> Buy Now</button>
                </div>
                <div class="d-flex justify-content-center flex-sm-column align-items-center align-items-lg-start mx-lg-5 mx-sm-auto mt-3 mt-sm-4 w-xl-93 mt-xxl-4 ms-xxl-3">
                    <div class="glassmorphism-text-div mx-1 d-flex py-1 align-items-center mb-sm-1">
                        <img class="mx-1 mx-sm-3" src="./assets/images/icons/banner-android-icon.svg" width="24px" alt="">
                        <p class="text-light m-0 mx-1 fs-6">FREE Android App (White Labelled App worth ₹4000 for your website) </p>
                    </div>
                    <div class="glassmorphism-text-div mx-1 d-flex p-1 align-items-center mb-sm-1 mt-lg-2">
                        <img class="mx-1 mx-sm-3" src="./assets/images/icons/banner-android-icon.svg" width="24px" alt="">
                        <p class="text-light m-0 mx-1  fs-6">FREE CouponAPI Voucher (Get ₹2200 OFF on couponapi.org) </p>
                    </div>
                </div>
                <p class="text-light text-center mt-2 fs-6 mt-sm-3 text-lg-start mt-lg-1 mx-lg-5 w-xl-93 mx-1 mx-sm-3 ms-xxl-3">*FREE products are only for purchases before 6th November 2022</p>
                <div class="carousel-indicators position-relative justify-content-lg-start mt-3 mx-md-5 mt-xl-0  mx-xl-5 my-xl-5 mx-xxl-3">
                    <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
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
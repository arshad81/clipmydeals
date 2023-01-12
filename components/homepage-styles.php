<div class="shadow shadow-md-none rounded-4" id="homepage-style">
    <div class="row align-items-center justify-content-center justify-content-lg-between ">
        <div class="col-12 col-sm-7 col-md-6  order-md-1">
            <div id="coupon-theme-hp-style">
                <img id="videoImg" src="./assets/images/coupon-themes/images/Homepage Styles video-min.png" width="636" height="375" class="w-100 h-auto hp-image" alt="...">
                <img id="slidesImg" src="./assets/images/coupon-themes/images/Homepage Styles slides-min.png" width="613" height="400" class="w-100 h-auto d-none hp-image" alt="...">
                <img id="multipleSlidesImg" src="./assets/images/coupon-themes/images/Homepage Styles multislides-min.png" width="613" height="400" class="w-100 h-auto d-none hp-image" alt="...">
                <img id="staticBannerImg" src="./assets/images/coupon-themes/images/Homepage Styles-static-min.png" width="613" height="400" class="w-100 h-auto d-none hp-image" alt="...">
                <img id="cleanerLookImg" src="./assets/images/coupon-themes/images/Homepage-Styles-clean-look-min.png" width="613" height="400" class="w-100 h-auto d-none hp-image" alt="...">

            </div>
        </div>
        <div class="col-12 col-sm-10 col-md-6 ">
            <div class="card w-100  shadow-md rounded-3 px-4 py-md-3 py-lg-5 ">
                <div class="card-body mx-auto px-2">
                    <p class="card-title h6 fs-md-3">Homepage Styles</p>
                    <p class="card-text h4 fw-light fs-md-5 mt-lg-3 pe-2">Welcome your visitors to website with a Video, Banner, Slider or simply a minimillistic clean homepage</p>
                    <div class="row p-0 gx-1 gy-2 mt-md-4 gx-md-0 gx-lg-2 w-sm-75 w-md-100 w-lg-100 my-3 mx-auto">
                        <div class="col-6 col-md-3 ">
                            <button id="video" onclick="imageChanger('video')" class="btn w-100 py-2 py-md-2 px-md-1 hp-btn fw-md-bold fs-6  btn-primary">Video</button>
                        </div>
                        <div class="col-6 col-md-3">
                            <button id="slides" onclick="imageChanger('slides')" class="btn w-100 py-2 py-md-2 px-md-1  fw-md-bold fs-6 hp-btn  btn-outline-custom-dark-gray">Slides</button>
                        </div>
                        <div class="col-6 col-md-4">
                            <button id="multipleSlides" onclick="imageChanger('multipleSlides')" class="btn w-100 px-0 py-2 py-md-2 px-md-1  fw-md-bold fs-6 hp-btn  btn-outline-custom-dark-gray">Multiple Slides</button>
                        </div>
                        <div class="col-6 col-md-4">
                            <button id="staticBanner" onclick="imageChanger('staticBanner')" class="btn w-100 px-0 py-2 py-md-2 px-md-1  fw-md-bold fs-6 hp-btn  btn-outline-custom-dark-gray">Static Banner</button>
                        </div>
                        <div class="col-6 col-md-4">
                            <button id="cleanerLook" onclick="imageChanger('cleanerLook')" class="btn w-100 px-0 py-2 py-md-2 px-md-1  fw-md-bold fs-6 hp-btn  btn-outline-custom-dark-gray">Cleaner Look</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function imageChanger(id) {

        var imageId = id + "Img"

        allBtn = document.getElementsByClassName("hp-btn")
        allImages = document.getElementsByClassName("hp-image")
        clickedBtn = document.getElementById(id)

        if (!clickedBtn.classList.contains("btn-primary")) {
            for (i = 0; i < allBtn.length; i++) {
                allBtn[i].classList.remove("btn-primary")
                allBtn[i].classList.add("btn-outline-custom-dark-gray")
                allImages[i].classList.remove("d-block");
                allImages[i].classList.add("d-none");
            }
            clickedBtn.classList.add("btn-primary")
            clickedBtn.classList.remove("btn-outline-custom-dark-gray")
        }
        clickedImg = document.getElementById(imageId).classList.remove("d-none")
        clickedImg = document.getElementById(imageId).classList.add("d-block")
    }
</script>
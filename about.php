<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/link.php'); ?>
    <title> JP Hotel-abouts us </title>
    <!-- swiperjs link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <style>
        .box {
            border-top-color: aqua;
        }
    </style>


</head>

<body class="bg-light">

    <?php require('inc/header.php'); ?>
    <!-- <?php include('css/common.csss'); ?> -->

    <div class="my-5 px-4">
        <h2 class="h-font fw-bold text-center"> OUR ABOUT US </h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae optio
            blanditiis unde, dolores a officiis sint sapiente nulla magnam odit nemo dolorem provident non, hic possimus
            ullam, nobis illum sunt!</p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">
                    Lorem ipsum dolor sit
                </h3>
                <p>amet consectetur adipisicing elit. Laboriosam dolore molestias sit voluptate? Facere, corrupti. Quod
                    recusandae laboriosam maiores quam at aliquam, ea modi officia, neque voluptate, officiis
                    exercitationem dolorem!</p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4  order-lg-2  order-md-1 order-1">
                <img src="image/about/3.jpg" class="w-100" alt="">
            </div>

        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 CUSTOMERSd-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 boder-top boder-4 text-center box">
                    <img src="image/about/5.svg" alt="" width="70px">
                    <h4 class="mt-3">
                        100+ Rooms
                    </h4>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 boder-top boder-4 text-center box">
                    <img src="image/about/4.svg" alt="" width="70px">
                    <h4 class="mt-3">
                        200+CUSTOMERS
                    </h4>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 boder-top boder-4 text-center box">
                    <img src="image/about/6.svg" alt="" width="70px">
                    <h4 class="mt-3">
                        10000+REVIEWS
                    </h4>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 boder-top boder-4 text-center box">
                    <img src="image/about/7.svg" alt="" width="70px">
                    <h4 class="mt-3">
                        200+ STAFFS
                    </h4>
                </div>

            </div>
        </div>
    </div>
    <h4 class="my-5 h-font fw-bold text-center "> MANAGEMANT</h4>

    <div class="container  px-4">
        <!-- Swiper -->
        <div class="swiper Swiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="image/about/2.jpg" class="w-100" alt="">
                    <h5> Rendom Name </h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="image/about/2.jpg" class="w-100" alt="">
                    <h5> Rendom Name </h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="image/about/2.jpg" class="w-100" alt="">
                    <h5> Rendom Name </h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="image/about/2.jpg" class="w-100" alt="">
                    <h5> Rendom Name </h5>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <?php require('inc/footer.php') ?>

    <!-- <bootstrap  js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- swiperjs link  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".Swiper", {
            slidesPerview: 4,
            spaceBetween: 40,
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
            },

            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>

</body>

</html>

</html>
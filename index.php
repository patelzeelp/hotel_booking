<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> JP Hotel-HOME </title>
    <?php require('inc/link.php'); ?>

    <style>
        .availability-form {
            margin-top: -50px;
            position: relative;
            z-index: 2;

        }

        .custome-bg {
            background-color: #2ec1ac;
            border: 1px solid #2ec1ac;
        }

        .custome-bg:hover {
            background-color: #279e8c;
        }

        @media screen and(max-width:575px) {

            .availability-form {
                margin-top: 25px;
                position: relative;

            }
        }
    </style>
</head>

<body class="bg-light">

    <?php require('inc/header.php'); ?>
    <!-- Swiper -->
    <div class="container-fuild px-lg-4 mt-4">
        <div class="swiper Swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="image/carousel/1.png " class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="image/carousel/2.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="image/carousel/3.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="image/carousel/4.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="image/carousel/5.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="image/carousel/6.png" class="w-100 d-block" />
                </div>


            </div>

        </div>
    </div>

    <!-- chach ability form  -->
    <div class="container availability-form ">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded-3 ">
                <h5 class="mb-4"> Chack booking availability</h5>
                <form action="">
                    <div class="row  align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label for="Date " class="form-label" style="font-weight: 500;">chack-in </label>
                            <input type="date" class="form-control shadow-none" id="Date ">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label for="Date " class="form-label" style="font-weight: 500;">chack-out </label>
                            <input type="date" class="form-control shadow-none" id="Date ">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label for="Date " class="form-label" style="font-weight: 500;"> Adult </label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label for="Date " class="form-label" style="font-weight: 500;"> Children </label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class=" btn text-white shadow-none custome-bg"> Submit </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- our room  -->
    <h5 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> OUR ROOMS </h5>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="image/room/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Simpal Room Name </h5>
                        <h6 class="mb-4">₹200 Par Night </h6>
                        <div class="features mb-4">
                            <h6 class="mb-1"> Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                2Rooms.
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                1BathRoom.
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                1balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                3Sofa
                            </span>

                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1"> Filities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                room heater
                            </span>


                        </div>
                        <div class="Guests mb-4">
                            <h6 class="mb-1"> Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                5Adults
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                4children
                            </span>



                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1"> Rating </h6>
                            <span class="badge rounded-pill bg-light ">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly">
                            <a href="#" class="btn btn-sm text-white custome-bg shadow-none"> Book Now </a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none"> More Details </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="image/room/2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Simpal Room Name </h5>
                        <h6 class="mb-4">₹200 Par Night </h6>
                        <div class="features mb-4">
                            <h6 class="mb-1"> Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                2Rooms.
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                1BathRoom.
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                1balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                3Sofa
                            </span>

                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1"> Filities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                room heater
                            </span>


                        </div>
                        <div class="Guests mb-4">
                            <h6 class="mb-1"> Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                5Adults
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                4children
                            </span>



                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1"> Rating </h6>
                            <span class="badge rounded-pill bg-light ">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly">
                            <a href="#" class="btn btn-sm text-white custome-bg shadow-none"> Book Now </a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none"> More Details </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="image/room/3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Simpal Room Name </h5>
                        <h6 class="mb-4">₹200 Par Night </h6>
                        <div class="features mb-4">
                            <h6 class="mb-1"> Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                2Rooms.
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                1BathRoom.
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                1balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                3Sofa
                            </span>

                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1"> Filities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                room heater
                            </span>


                        </div>
                        <div class="Guests mb-4">
                            <h6 class="mb-1"> Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                5Adults
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                4children
                            </span>



                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1"> Rating </h6>
                            <span class="badge rounded-pill bg-light ">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly">
                            <a href="#" class="btn btn-sm text-white custome-bg shadow-none"> Book Now </a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none"> More Details </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-2 fw-bold shadow-none "> More Room >>></a>
            </div>
        </div>
    </div>

    <!-- our Facilitis  -->
    <h4 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> OUR Facilitis </h4>

    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded-3 shadow py-4 my-3">
                <img src="image/facility/4.svg" alt="" width="80px">
                <h5 class="mt-3"> Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded-circle shadow py-4 my-3">
                <img src="image/facility/1.svg" alt="" width="80px">
                <h5 class="mt-3"> Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded-3 shadow py-4 my-3">
                <img src="image/facility/5.svg" alt="" width="80px">
                <h5 class="mt-3"> Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded-circle shadow py-4 my-3">
                <img src="image/facility/3.svg" alt="" width="80px">
                <h5 class="mt-3"> Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded-3 shadow py-4 my-3">
                <img src="image/facility/6.svg" alt="" width="80px">
                <h5 class="mt-3"> Wifi</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-2 fw-bold shadow-none "> More Facilitis >>></a>
            </div>
        </div>
    </div>
    <!-- our TESTIMONIALS  -->
    <h4 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> OUR TESTIMONIALS </h4>
    <div class="container mt-5">

        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white p-4 ">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="image/facility/1.svg" alt="" width="30px ">
                        <h6 class="m-0 ms-2">Rendom User </h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo beatae est facere ipsa minima! Nihil
                        voluptatibus nisi assumenda totam odit fuga consectetur minima repudiandae consequatur dicta?
                        Aut laborum nobis omnis.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>

                    </div>
                </div>
                <div class="swiper-slide bg-white p-4 ">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="image/facility/1.svg" alt="" width="30px ">
                        <h6 class="m-0 ms-2">Rendom User </h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo beatae est facere ipsa minima! Nihil
                        voluptatibus nisi assumenda totam odit fuga consectetur minima repudiandae consequatur dicta?
                        Aut laborum nobis omnis.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>

                    </div>
                </div>
                <div class="swiper-slide bg-white p-4 ">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="image/facility/1.svg" alt="" width="30px ">
                        <h6 class="m-0 ms-2">Rendom User </h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo beatae est facere ipsa minima! Nihil
                        voluptatibus nisi assumenda totam odit fuga consectetur minima repudiandae consequatur dicta?
                        Aut laborum nobis omnis.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>

                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

    <!-- rich us / -->
    <h4 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> OUR TESTIMONIALS </h4>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-4 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100  rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58350.183621482895!2d72.32223496709743!3d23.929073714071684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395cf4fdb8907cdb%3A0xb588efce07ef80e5!2sSiddhpur%2C%20Gujarat%20384151!5e0!3m2!1sen!2sin!4v1681888305284!5m2!1sen!2sin" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5> coll US</h5>
                    <a href="tel: +9112345677890" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone"></i> +9112345677890</a><br>
                    <a href="tel: +9112345677890" class="d-inline-block  text-decoration-none text-dark">
                        <i class="bi bi-telephone"></i> +9112345677890</a>
                </div>

                <div class="bg-white p-4 rounded mb-4">
                    <h5> Follow US</h5>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-twitter me-1"></i> Twitter
                        </span>
                    </a><br>
                    <a href="" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook me-1"></i> FaceBook
                        </span>
                    </a><br>
                    <a href="#" class="d-inline-block ">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram me-1"></i> Instagram
                        </span>
                    </a><br>


                </div>



            </div>

        </div>
    </div>

    <?php require('inc/footer.php') ?>

    <!-- <bootstrap  js link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- swiperjs link  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".Swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            }
        });



        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
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
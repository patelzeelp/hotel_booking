<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> JP Hotel-Contact</title>

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

    <!-- <style>
    .pop:hover {
        border-top-color: var(--teal) !implements;
        transform: scale(1.03);
        transition: all 0.3s;

    }
    </style> -->
</head>

<body class="bg-light">

    <?php require('inc/header.php'); ?>
    <!-- <?php include('css/common.csss'); ?> -->

    <div class="my-5 px-4">
        <h2 class="h-font fw-bold text-center"> OUR ROOMS </h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae optio
            blanditiis unde, dolores a officiis sint sapiente nulla magnam odit nemo dolorem provident non, hic possimus
            ullam, nobis illum sunt!</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-iteam-stretch">
                        <h4 class="h-font mt-2 ">FILTERS</h4>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#filtredropdown" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column mt-2  align-iteam-stretch"
                            id="#filtredropdown">

                            <div class="boder bg-light  p-3 rounded mb-3 ">
                                <h5 style="font-size: 16px;" class="h-font"> CHECK AVALIABILITY </h5>
                                <label for="Date " class="form-label">chack-in </label>
                                <input type="date" class="form-control shadow-none" id="Date ">
                                <label for="Date " class="form-label">chack-out </label>
                                <input type="date" class="form-control shadow-none" id="Date ">
                            </div>
                            <div class="boder bg-light  p-3 rounded mb-3 ">
                                <h5 style="font-size: 16px;" class="h-font mb-3"> FACIILITYS </h5>
                                <div class="mb-2">
                                    <input type="checkbox" class="form-chaeck-input shadow-none me-1 " id="f1">
                                    <label for="f1" class="form-label">facility one </label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" class="form-chaeck-input shadow-none me-1 " id="f2">
                                    <label for="f2" class="form-label">facility two </label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" class="form-chaeck-input shadow-none me-1 " id="f3">
                                    <label for="f3" class="form-label">facility three </label>
                                </div>

                            </div>
                            <div class="boder bg-light  p-3 rounded mb-3 ">
                                <h5 style="font-size: 16px;" class="h-font mb-3"> GUESTS </h5>
                                <div class="d-flex">
                                    <div class="m-2">
                                        <label class="form-label"> Adults </label>
                                        <input type="number" class="form-control shadow-none ">
                                    </div>
                                    <div class="m-2">
                                        <label class="form-label"> Children </label>
                                        <input type="number" class="form-control shadow-none ">
                                    </div>

                                </div>

                            </div>
                            <!-- <form class="d-flex">
                                    <input class="form-control me-2" type="search" placeholder="Search"
                                        aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form> -->
                        </div>
                    </div>
                </nav>
          
            </div>
            <div class="col-lg-9 col-md-12 px-4">

                <div class="card mb-4 boder-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-4 mb-lg-0 mb-md-0 mb-0">
                            <img src="image/room/1.jpg" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-md-6 px-lg-4 px-md-4 p-0">
                            <h5 class="mb-1">Simpal Rooms Name </h5>
                            <div class="features mb-3">
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
                            <div class="facilities mb-3">
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
                            <div class="Guests ">
                                <h6 class="mb-1"> Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    5Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    4children
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-align-center">
                            <h6 class="mb-4">₹200 Par Night </h6>
                            <a href="#" class="btn btn-sm w-100 text-white custome-bg shadow-none mb-2"> Book Now </a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none"> More Details </a>
                        </div>
                    </div>

                </div>
                <div class="card mb-4 boder-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-4 mb-lg-0 mb-md-0 mb-0">
                            <img src="image/room/3.png" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-md-6 px-lg-4 px-md-4 p-0">
                            <h5 class="mb-1">Simpal Rooms Name </h5>
                            <div class="features mb-3">
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
                            <div class="facilities mb-3">
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
                            <div class="Guests ">
                                <h6 class="mb-1"> Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    5Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    4children
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-align-center">
                            <h6 class="mb-4">₹200 Par Night </h6>
                            <a href="#" class="btn btn-sm w-100 text-white custome-bg shadow-none mb-2"> Book Now </a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none"> More Details </a>
                        </div>
                    </div>

                </div>
                <div class="card mb-4 boder-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-4 mb-lg-0 mb-md-0 mb-0">
                            <img src="image/room/2.png" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-md-6 px-lg-4 px-md-4 p-0">
                            <h5 class="mb-1">Simpal Rooms Name </h5>
                            <div class="features mb-3">
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
                            <div class="facilities mb-3">
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
                            <div class="Guests ">
                                <h6 class="mb-1"> Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    5Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    4children
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-align-center">
                            <h6 class="mb-4">₹200 Par Night </h6>
                            <a href="#" class="btn btn-sm w-100 text-white custome-bg shadow-none mb-2"> Book Now </a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none"> More Details </a>
                        </div>
                    </div>

                </div>
            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

    <!-- swiperjs link  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


</body>

</html>
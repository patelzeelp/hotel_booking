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
        <h2 class="h-font fw-bold text-center"> CONTACT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae optio
            blanditiis unde, dolores a officiis sint sapiente nulla magnam odit nemo dolorem provident non, hic possimus
            ullam, nobis illum sunt!</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded-4 shadow p-4 ">

                    <iframe class="w-100  rounded mb-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58350.183621482895!2d72.32223496709743!3d23.929073714071684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395cf4fdb8907cdb%3A0xb588efce07ef80e5!2sSiddhpur%2C%20Gujarat%20384151!5e0!3m2!1sen!2sin!4v1681888305284!5m2!1sen!2sin" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!-- <h5 class=" bg-white rounded-4 shadow p-2"> Address </h5> -->
                    <a href="https://goo.gl/maps/MYae5K4Lwo1qHTAd8b" target="_blank" class=" mt-4 text-decoration-none bg-white rounded-4 shadow p-2 ">
                        <i class="bi bi-geo-alt-fill h-font"></i> JP HOTEL
                    </a>
                    <h5 class="mt-4"> coll US</h5>
                    <a href="tel: +9112345677890" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone"></i> +9112345677890</a><br>
                    <a href="tel: +9112345677890" class="d-inline-block  text-decoration-none text-dark">
                        <i class="bi bi-telephone"></i> +9112345677890</a>
                    <h5 class="mt-4"> Email </h5>
                    <a href="mailto : pateljil99248@gmail.com" class="d-inline-block  text-decoration-none text-dark"><i class="bi bi-envelope-at-fill"></i> pateljil99248@gmail.com
                   </a>
                 
                   <h5 class="mt-4"> Follow US</h5>
                    <a href="#" class="d-inline-block mb-3">
                        <i class="bi bi-facebook me-1  mb-3  fs-5 me-2"></i>
                    </a>
                    <a href="#" class="d-inline-block mb-3">
                        <i class="bi bi-instagram me-1  mb-3  fs-5 me-2"></i>
                    </a>
                    <a href="#" class="d-inline-block mb-3">
                        <i class="bi bi-twitter me-1  mb-3  fs-5 me-2"></i>
                    </a>


                </div>


            </div>
            <div class="col-lg-6 col-md-6 ">
                <div class="bg-white rounded-4 shadow p-4 ">
                    <form >
                        <h5>Send A Massage </h5>
                        <div class="  mb-3">
                            <label for="name" class="form-label " style="font-weight: 500;">Name</label>
                            <input type="text" class="form-control shadow-none" id="name">
                        </div>
                        <div class="  mb-3">
                            <label for="Email" class="form-label " style="font-weight: 500;">Email</label>
                            <input type="Email" class="form-control shadow-none" id="Email">
                        </div>
                        <div class="  mb-3">
                            <label for="Subject" class="form-label " style="font-weight: 500;">Subject</label>
                            <input type="text" class="form-control shadow-none" id="Subject">
                        </div>
                        <div class=" mb-3">
                            <label for="Message " class="form-label">Message </label>
                            <textarea class="form-control shadow-none" id="exampleFormControlTextarea1" rows="5" style="resize: none;"></textarea>
                        </div>

                        <button type="submit" class=" btn text-white shadow-none custome-bg"> Send A Message </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

  


    <?php require('inc/footer.php') ?>
    <!-- <bootstrap  js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- swiperjs link  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


</body>

</html>
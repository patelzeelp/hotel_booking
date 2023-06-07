<?php

session_start();
if (!isset($_SESSION['adminloginId'])) {
    header("location:index.php");
}
// session_regenerate_id(true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel Setting </title>
    <link rel="stylesheet" href="../css/common.css">
</head>
<style>
    .custome-alert {
        position: fixed;
        top: 20px;
        right: 30px;
    }
</style>
<?php require('incc/link.php'); ?>

<body class="bg-light">

    <?php require('incc/header.php'); ?>


    <div class="container-fluid " id="main-contant">
        <div class="row">
            <div class="col-lg-10 ms-auto mt-2 p-4 overflow-hidden">
                <div class=" align-items-center ">
                    <h3 class="mb-4 shodow">SETTING</h3>
                </div>
                <!-- grnral setting section  -->
                <div class="card boder-0 shadow-sm mb-2">
                    <div class="card-body">
                        <div class="d-flex  align-items-center justify-content-between">
                            <h5 class="card-title">General Setting </h5>

                            <button type="button" class="btn btn-primary shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#General">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>
                        <h6 class="card-subtitle mb-1 fw-bold ">Site Title</h6>
                        <p class="card-text" id="site_title"> </p>
                        <h6 class="card-subtitle mb-1 fw-bold ">Site About</h6>
                        <p class="card-text" id="site_about"> </p>

                    </div>
                </div>

                <!-- general setting modal  -->
                <div class="modal fade" id="General" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="general_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">General Setting</h5>
                                </div>
                                <div class="modal-body">
                                    <div class=" mb-3">
                                        <label for="site_title_inp" class="form-label">Site Title</label>
                                        <input type="text" name="site_title" id="site_title_inp" required class="form-control shadow-none">
                                    </div>
                                    <div class=" mb-3">
                                        <label class="form-label">About US </label>
                                        <textarea class="form-control shadow-none" name="site_about" required id="site_about_inp" rows="6"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="site_title.value=general_data.site_title,site_about.value=general_data.site_about" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Shutdown section  -->
                <div class="card boder-0 shadow mb-2">
                    <div class="card-body">
                        <div class="d-flex  align-items-center justify-content-between">
                            <h5 class="card-title">Shutdown section</h5>
                            <div class="form-check form-switch">
                                <form>
                                    <input onchange="upd_shutdown(this.value)" id="shutdown-toggle" class="form-check-input" type="checkbox">
                                </form>
                            </div>
                        </div>
                        <p class="card-text"> No Customer Will Be allowes To Book Hotel Room , When shutdown Mode Is
                            Turned On </p>
                    </div>
                </div>


                <!-- Contact section  -->
                <div class="card boder-0 shadow-sm mb-2">
                    <div class="card-body">
                        <div class="d-flex  align-items-center justify-content-between">
                            <h5 class="card-title fw-bold mb-2">Contact Setting </h5>
                            <button type="button" class="btn btn-primary shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contact-s">
                                <i class="bi bi-pencil-square "></i> Edit
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold  mt-2">Address</h6>
                                    <p class="card-text" id="address"> </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold ">Google Map</h6>
                                    <p class="card-text" id="gmap"> </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold ">Phone Number</h6>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-telephone mb-1"> </i>
                                        <span id="pn1"></span>
                                    </p>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-telephone"></i>
                                        <span id="pn2"></span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold ">Email</h6>
                                    <p class="card-text" id="email"> </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold ">Social link</h6>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-facebook me-1  mb-3  fs-5 me-2"></i>
                                        <span id="fb"></span>
                                    </p>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-instagram me-1  mb-3  fs-5 me-2"></i>
                                        <span id="insta"></span>
                                    </p>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-twitter me-1  mb-3  fs-5 me-2"></i>
                                        <span id="tw"></span>
                                    </p>

                                </div>
                                <div class="mb-3">
                                    <h6 class="card-subtitle mb-1 fw-bold ">iframe</h6>
                                    <iframe id="iframe" class="border w-100 p2" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- contact setting modal  -->
                <div class="modal fade" id="contact-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form id="contacts_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Contact Setting</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class=" mb-3">
                                                    <label for="address_inp" class="form-label">Address </label>
                                                    <input type="text" name="address" id="address_inp" required class="form-control shadow-none">
                                                </div>
                                                <div class=" mb-3">
                                                    <label for="gmap_inp" class="form-label">Google Map Link </label>
                                                    <input type="text" name="gmap" id="gmap_inp" required class="form-control shadow-none">
                                                </div>
                                                <div class=" mb-3">
                                                    <label for="pn1_inp" class="form-label">Phone No (with contary code) </label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"> <i class="bi bi-telephone"></i></span>
                                                        <input type="text" name="pn1" id="pn1_inp" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"> <i class="bi bi-telephone"></i></span>
                                                        <input type="text" name="pn2" id="pn2_inp" class="form-control shadow-none">
                                                    </div>
                                                </div>
                                                <div class=" mb-3">
                                                    <label for="email_inp" class="form-label">Email </label>
                                                    <input type="text" name="email" id="email_inp" required class="form-control shadow-none">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class=" mb-3">
                                                    <label for="fb_inp" class="form-label">Social Link </label>
                                                    <div class="input-group mb-3">
                                                        <i class="bi bi-facebook me-1  mb-2  fs-5 me-1"></i>
                                                        <span class="input-group-text"> </span>
                                                        <input type="text" name="fb" id="fb_inp" class="form-control shadow-none">
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <i class="bi bi-instagram me-1  mb-2  fs-5 me-1"></i>
                                                        <span class="input-group-text"></span>
                                                        <input type="text" name="insta" id="insta_inp" class="form-control shadow-none">
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <i class="bi bi-twitter me-1  mb-2  fs-5 me-1"></i>
                                                        <span class="input-group-text"></span>
                                                        <input type="text" name="tw" id="tw_inp" class="form-control shadow-none">
                                                    </div>

                                                </div>
                                                <div class=" mb-3">
                                                    <label for="iframe_inp" class="form-label">Iframe Src</label>
                                                    <input type="text" name="iframe" id="iframe_inp" required class="form-control shadow-none">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="contacts_inp(contacts_data)" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Management setting section  -->
                <div class="card boder-0 shadow-sm mb-2">
                    <div class="card-body">
                        <div class="d-flex  align-items-center justify-content-between">
                            <h5 class="card-title">Management Setting </h5>

                            <button type="button" class="btn btn-primary shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#team-s">
                                <i class="bi bi-file-plus"></i> Add
                            </button>
                        </div>
                        <div class="row" id="team"></div>
                    </div>
                </div>

                <!-- Management setting modal  -->
                <div class="modal fade" id="team-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="team_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"> Management Setting</h5>
                                </div>
                                <div class="modal-body">
                                    <div class=" mb-3">
                                        <label for="site_title_inp" class="form-label"> Name</label>
                                        <input type="text" name="member_name" id="member_name_inp" required class="form-control shadow-none">
                                    </div>
                                    <div class=" mb-3">
                                        <label class="form-label">Picture </label>
                                        <input type="file" name="member_picture" id="member_picture_inp" accept=".jpg, .png, .webp, .jpeg" required class="form-control shadow-none">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>




    <script>
        let general_data, contacts_data;
        let general_s_form = document.getElementById('general_s_form');
        let site_title_inp = document.getElementById("site_title_inp");
        let site_about_inp = document.getElementById("site_about_inp");

        let contacts_s_form = document.getElementById('contacts_s_form');
        let team_s_form = document.getElementById('team_s_form');
        let member_name_inp = document.getElementById("member_name_inp");
        let member_picture_inp = document.getElementById("member_picture_inp");


        function get_general() {
            let site_title = document.getElementById("site_title");
            let site_about = document.getElementById("site_about");
            let shutdown_toggle = document.getElementById('shutdown-toggle');


            let xhr = new XMLHttpRequest();
            xhr.open('POST', "ajax/setting_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                general_data = JSON.parse(this.responseText);
                site_title.innerText = general_data.site_title;
                site_about.innerText = general_data.site_about;
                site_about_inp.value = general_data.site_title;
                site_about_inp.value = general_data.site_about;

                if (general_data.shutdown == 0) {
                    site_title_inp.value = general_data.site_title;
                    shutdown_toggle.checked = false;
                    shutdown_toggle.value = 0;
                } else {
                    shutdown_toggle.checked = true;
                    shutdown_toggle.value = 1;
                }
            }
            xhr.send('get_general');
        }


        general_s_form.addEventListener('submit', function(e) {
            e.preventDefault();
            upd_general(site_title_inp.value, site_about_inp.value);
        });

        function upd_general(site_title_val, site_about_val) {

            let xhr = new XMLHttpRequest();
            xhr.open('POST', "ajax/setting_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                var myModal = document.getElementById('General');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if (this.responseText == 1) {
                    // alert('success', 'is change ');
                    console.log('success', 'is change ');
                    get_general();
                } else {
                    // alert('error', 'no changes made!');
                    console.log('error', 'no changes made!');
                }
            }
            xhr.send('site_title=' + site_title_val + '&site_about=' + site_about_val + '&upd_general');
        }



        function upd_shutdown(val) {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', "ajax/setting_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            console.log('no shutdown');

            xhr.onload = function() {
                if (this.responseText == 1 && general_data.shutdown == 0) {
                    // alert('changes saved!');
                } else {
                    // alert(' no shutdown');
                    console.log('off shutdown');
                }
                get_general();
            }
            xhr.send('upd_shutdown=' + val);

        }


        function get_contacts() {
            let contacts_p_id = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'insta', 'tw'];
            let iframe = document.getElementById('iframe');

            let xhr = new XMLHttpRequest();
            xhr.open('POST', "ajax/setting_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                contacts_data = JSON.parse(this.responseText);
                contacts_data = Object.values(contacts_data);

                for (i = 0; i < contacts_p_id.length; i++) {
                    document.getElementById(contacts_p_id[i]).innerHTML = contacts_data[i + 1];
                }
                // console.log(contacts_data);
                iframe.src = contacts_data[9];
                contacts_inp(contacts_data);
            }
            xhr.send('get_contacts');

        }

        function contacts_inp(data) {
            let conntacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'fb_inp', 'insta_inp', 'tw_inp', 'iframe_inp'];

            for (i = 0; i < conntacts_inp_id.length; i++) {
                document.getElementById(conntacts_inp_id[i]).value = data[i + 1];
                //  console.log(conntacts_inp_id);
            }
        }

        contacts_s_form.addEventListener('submit', function(e) {
            e.preventDefault();
            upd_contacts();
        });

        function upd_contacts() {
            let index = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'insta', 'tw'];
            let contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'fb_inp', 'insta_inp', 'tw_inp', 'iframe_inp'];
            let data_str = "";

            for (i = 0; i < index.length; i++) {
                data_str += index[i] + "=" + document.getElementById(contacts_inp_id[i]).value + '&';
            }
            data_str += "upd_contacts";
            //  console.log( get_contacts);

            let xhr = new XMLHttpRequest();
            xhr.open('POST', "ajax/setting_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                var myModal = document.getElementById('contact-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();
                if (this.responseText == 1) {
                    alert('changes saved!');
                    get_contacts();
                } else {
                    alert(' No changes');
                    // console.log('no changes');

                }
            }
            xhr.send(data_str);
        }

        team_s_form.addEventListener('submit', function(e) {
            e.preventDefault();
            add_member();
        });

        function add_member() {
            let data = new FormData();
            data.append('name', member_name_inp.value);
            data.append('picture', member_picture_inp.files[0]);
            data.append('add_member', '');

            let xhr = new XMLHttpRequest();
            xhr.open('POST', "ajax/setting_crud.php", true);

            xhr.onload = function() {
                var myModal = document.getElementById('General');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if (this.responseText == 1) {
                    // alert('success', 'is change ');
                    console.log('success', 'is change ');
                    get_general();
                } else {
                    // alert('error', 'no changes made!');
                    console.log('error', 'no changes made!');
                }
            }
            xhr.send(data);

        }

        window.onload = function() {
            get_general();
            get_contacts();
        }
    </script>



</body>

</html>
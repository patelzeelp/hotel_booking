    <?php require('incc/db.php'); ?>
    <?php require('incc/alert.php'); ?>



    <?php
    if (isset($_POST['login'])) {
        $quary = "SELECT * FROM `admin_cred` WHERE `admin_name`='$_POST[AdminName]' AND `admin_pass`='$_POST[AdminPass]'";
        $res = mysqli_query($con, $quary);
        if (mysqli_num_rows($res) == 1) {
            session_start();
           alert('sucess','done');
            $_SESSION['adminloginId'] = $_POST['AdminName'];
            header("location:adminpanal.php");
        } else {
            alert('error','worng password');


        }
    }

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Admin Login panel </title>
        <link rel="stylesheet" href="../css/common.css">
        <?php require('incc/link.php'); ?>
        <style>
            .availability-form {
                margin-top: -50px;
                position: relative;
                z-index: 2;

            }

            div.login-form {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 400px;
            }

            .custome-bg {
                background-color: #2ec1ac;
                border: 1px solid #2ec1ac;
            }

            .custome-bg:hover {
                background-color: #279e8c;
            }
            .custome-alert{
                position: fixed;
                top:20px;
                right: 30px;
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
        <div class="login-form text-center bg-white shadow p-4 rounded-4 custome-bg ">
            <form method="POST">

                <h4 class="p-4 h-font "> Admin Login panel</h4>
                <div>
                    <div class="mb-3">
                        <input name="AdminName" type="text" class="form-control shadow-none text-center" required placeholder="Admin Name  " id="exampleInputEmail1">
                    </div>
                    <div class="mb-4">
                        <input name="AdminPass" type="password" class="form-control shadow-none text-center" required id="password" placeholder="Password">
                    </div>
                    <button type="submit" name="login" value="login" class="btn text-white custome-bg shadow-none  " style="width: 350px;">Login </button>
                </div>
            </form>
        </div>
        <?php require('incc/script.php'); ?>

    </body>

    </html>
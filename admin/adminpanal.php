<?php
session_start();
if (!isset($_SESSION['adminloginId'])) {
    header("location:index.php");
}
session_regenerate_id(true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panal desbord </title>
    <link rel="stylesheet" href="../css/common.css">

    <?php require('incc/link.php'); ?>


</head>

<body class="bg-light">

    <?php require('incc/header.php'); ?>

    <div class="container-fluid " id="main-contant">
        <div class="row">
            <div class="col-lg-10 ms-auto mt-2">
               <p> hello </p>
            </div>
        </div>
    </div>



    <?php require('../admin/incc/script.php'); ?>

</body>

</html>
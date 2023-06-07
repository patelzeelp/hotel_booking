<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = 'hotel';

$con = mysqli_connect($server, $username, $password, $db);
if (!$con) {
  die("can not connect database " . mysqli_connect_error());
}
$db = mysqli_select_db($con, 'hotel');


function filteraction($data)
{
  foreach ($data as $key => $value) {
    $data[$key] = trim($value);
    $data[$key] = stripcslashes($value);
    $data[$key] = htmlspecialchars($value);
    $data[$key] = strip_tags($value);
  }
  return $data;
}
function select($sql, $value, $datatype)
{
  $con = $GLOBALS['con'];
  if ($stmt = mysqli_prepare($con, $sql)) {
    mysqli_stmt_bind_param($stmt, $datatype, ...$value);
    if (mysqli_stmt_execute($stmt)) {
      $res = mysqli_stmt_get_result($stmt);
      mysqli_stmt_close($stmt);
      return $res;
    } else {
      die("quary can not executed -Select ");
    }
  } else {
    die("quary can not prepared -Select ");
  }
}
function update($sql, $value, $datatype)
{
  $con = $GLOBALS['con'];
  if ($stmt = mysqli_prepare($con, $sql)) {
    mysqli_stmt_bind_param($stmt, $datatype, $value);
    if (mysqli_stmt_execute($stmt)) {
      $res = mysqli_stmt_affected_rows($stmt);
      mysqli_stmt_close($stmt);
      return $res;
    } else {
      die("quary can not executed -update ");
    }
  } else {
    die("quary can not prepared -update ");
  }
}

<?php
session_start();
include ("test_conect_db.php");
$link=conectDataBase();
$result=mysqli_query($link, "select user_pw from employees where user_name=".$_POST["userid"]);
$pw=mysqli_fetch_array($result);

#sha1($pw); para cifrar contraseñas

if ($pw["user_pw"]==$_POST["password"]) {
  # code...
  $_SESSION["loged"]="yes";
  $_SESSION["name"]=$pw["name"];
  header("Location: index.php");
}else {
  # code...
 header("Location: index.php?login=0");
}

 ?>

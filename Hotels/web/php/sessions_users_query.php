<?php
include ("test_conect_db.php");
$link=conectDataBase();
$result=mysqli_query($link, "select user_pw from user_enterprise where user_id=".$_POST["userid"]);
$pw=mysqli_fetch_array($result);
#sha1($pw); para cifrar contraseñas

if ($pw["user_pw"]==$_POST["password"]) {
  # code...
  $_SESSION["loged"]="yes";
  $_SESSION["name"]="user_id";
}else {
  # code...
  $_SESSION["loged"]="no";
}

 ?>

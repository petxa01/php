<?php
include ("test_conect_db.php");
$link=conectDataBase();
$result=mysqli_query($link, "select user_pw from user_enterprise where user_id=".$_POST["userid"]);
$pw=mysqli_fetch_array($result);
if ($pw["user_pw"]==$_POST["password"]) {
  # code...
  header("Location: welcome.php");
}else {
  # code...
  header("Location: notloged.html");
}
 ?>

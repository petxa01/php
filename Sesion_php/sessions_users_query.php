<?php
include ("test_conect_db.php");
$link=conectDataBase();

$password=mysqli_query($link, "select user_pw from user_enterprise where user_id=".$_POST["userid"]);
$row=mysqli_fetch_array($password);
if ($row["user_pw"]==$_POST["password"]) {
  # code...
  header("Location: welcome.html");
}else {
  # code...
  header("Location: notloged.html");
}
 ?>

<?php
include_once "../base.php";

if(($_POST['acc']=="Ting3066") && ($_POST['pw']=="1234")){
  $_SESSION['login']=1;
  header("location:../backend.php");
}else{
  header("location:../front/login.php?err=1");
}



?>
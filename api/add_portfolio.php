<?php

include_once "../base.php";

if(!empty($_FILES['img']['tmp_name'])){
  move_uploaded_file($_FILES['img']['tmp_name'],'../img/'.$_FILES['img']['name']);
  $_POST['img']=$_FILES['img']['name'];
}


$Portfolio->save($_POST);

to("../backend.php?do=portfolio");
?>
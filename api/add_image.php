<?php

include_once "../base.php";

$data=[];
if(!empty($_FILES['img']['tmp_name'])){
  move_uploaded_file($_FILES['img']['tmp_name'],'../img/'.$_FILES['img']['name']);
  $data['img']=$_FILES['img']['name'];
}

$Image->save($data);

to("../backend.php?do=image");
?>
<?php

include_once "../base.php";

$tmp="";
foreach($_POST['text'] as $key => $text){
  if($key==0){
    $tmp=$tmp.$text;

  }else{
    $tmp=$tmp.",".$text;

  }
  

}

$_POST['text']=$tmp;

$Education->save($_POST);

to("../backend.php?do=education");
?>
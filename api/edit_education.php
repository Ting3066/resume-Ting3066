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


if(isset($_POST['sh']) || isset($_POST['del'])){

  foreach($_POST['id'] as $id){
    
    if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
      $Education->del($id);
    }else{
      $row=$Education->find($id);
      $row['sh']=(in_array($id,$_POST['sh']))?1:0;
      
      $Education->save($row);
    }
  }
}else{
  $Education->save($_POST);
}

to("../backend.php?do=education");
?>
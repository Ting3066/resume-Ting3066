<?php
include_once "../base.php";


if(isset($_GET['id'])){

  $row=$Portfolio->find($_GET['id']);
  if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],'../img/'.$_FILES['img']['name']);
    $row['img']=$_FILES['img']['name'];
  }
  $row['name']=$_POST['name'];
  $row['href']=$_POST['href'];
  $row['text']=$_POST['text'];

  $Portfolio->save($row);

}



  foreach($_POST['id'] as $key => $id){
    
    if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
      $Portfolio->del($id);
    }else{
      $row=$Portfolio->find($id);
      $row['sh']=(in_array($id,$_POST['sh']))?1:0;
      $Portfolio->save($row);
    }
  }


to("../backend.php?do=portfolio");
?>
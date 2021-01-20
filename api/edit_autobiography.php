<?php
include_once "../base.php";


if(isset($_POST['sh']) || isset($_POST['del'])){

  foreach($_POST['id'] as $id){
    
    if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
      $Auto->del($id);
    }else{
      $row=$Auto->find($id);
      $row['sh']=($id==$_POST['sh'])?1:0;
      
      $Auto->save($row);
    }
  }
}else{
  $Auto->save($_POST);
}

to("../backend.php?do=autobiography");
?>
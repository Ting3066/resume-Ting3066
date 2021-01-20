<?php
include_once "../base.php";


if(isset($_POST['sh']) || isset($_POST['del'])){

  foreach($_POST['id'] as $id){
    
    if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
      $Require->del($id);
    }else{
      $row=$Require->find($id);
      $row['sh']=($id==$_POST['sh'])?1:0;
      
      $Require->save($row);
    }
  }
}else{
  $Require->save($_POST);
}

to("../backend.php?do=require");
?>
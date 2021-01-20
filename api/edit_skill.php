<?php
include_once "../base.php";

foreach($_POST['id'] as $idk => $id){
  foreach($_POST['type'] as $tpk => $type){
    if($idk==$tpk){
      $row=$Skill->find($id);
      $row['type']=$type;
      $Skill->save($row);

    }
  }
}

print_r($_POST['type']);
if(isset($_POST['sh']) || isset($_POST['del'])){

  foreach($_POST['id'] as $id){
    
    if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
      $Skill->del($id);
    }else{
      $row=$Skill->find($id);
      $row['sh']=(in_array($id,$_POST['sh']))?1:0;
      
      $Skill->save($row);
    }
  }
}else{
  $Skill->save($_POST);
}



to("../backend.php?do=skill");
?>
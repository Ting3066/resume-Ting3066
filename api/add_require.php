<?php
include_once "../base.php";

$Require->save($_POST);
to("../backend.php?do=require");

?>
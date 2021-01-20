<?php
include_once "../base.php";

$Skill->save($_POST);
to("../backend.php?do=skill");

?>
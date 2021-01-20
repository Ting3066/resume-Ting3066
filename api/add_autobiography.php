<?php
include_once "../base.php";

$Auto->save($_POST);

to("../backend.php?do=autobiography");
?>
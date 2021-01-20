<?php
include_once "../base.php";

$Basic->save($_POST);
to("../backend.php?do=basic");
?>
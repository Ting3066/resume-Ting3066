<?php

include_once "../base.php";

$Experience->save($_POST);

to("../backend.php?do=experience");
?>
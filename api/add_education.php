<?php

include_once "../base.php";

$Education->save($_POST);

to("../backend.php?do=education");
?>
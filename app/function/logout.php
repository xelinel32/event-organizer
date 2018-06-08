<?php
include 'configdb.php';
session_destroy();
header("location: ".$_SERVER["HTTP_REFERER"]);
?>
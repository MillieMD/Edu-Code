<?php
session_start();
$_SESSION["id"] = 0;

header("location: ../index.php");
?>
<?php
include "connect_db.php"; // Connection is instantiated in connect_db.pph

session_start();

$sql = $db->prepare("SELECT userid, userPassword FROM ec_users WHERE email = ?;");
$sql->bind_param("s", $_POST["email"]);
$sql->execute();
$result = $sql->get_result();

if ($result === FALSE){
    header("location: /errors/database_error.php");
    exit()
}

if ($result == null){
    die("location: register.html");
}

$row = $result->fetch_assoc();

if (!password_verify($_POST["password"],$row["userPassword"])){
    die("login failed");
}else{
    $_SESSION["id"] = $row["userid"];
    
    //REDIRECT TO HOME PAGE
    header("location: ../index.php");
}

?>
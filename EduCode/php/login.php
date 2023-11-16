<?php
session_start();

$db = $connect_db("u2259541");

$sql = $db->prepare("SELECT userid, userPassword FROM users WHERE email = ?;");
$sql->bind_param("s", $_POST["email"]);
$sql->execute();
$result = $sql->get_result();

if ($result === FALSE){
    die("<html><body><h1> Error: Query unsuccessful </h1> <p>Arc Code are sorry for the inconvinience, please try again later  </p></body></html>");
    return 0;
}

if ($result == null){
    die("no user found");
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
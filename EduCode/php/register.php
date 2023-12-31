<?php

require_once "connect_db.php"; // Connection is instantiated in connect_db.php

session_start();

// Insert new account details into users
$sql = $db->prepare("INSERT INTO ec_users (username, email, userPassword) VALUES (?, ?, ?);");
$sql->bind_param("sss",$_POST["username"], $_POST["email"], $_POST["password"],);
$sql->execute();

// Fetches new users user ID to auto log in user
$sql = $db->prepare("SELECT userID FROM ac_users WHERE email = ?;");
$sql->bind_param("s", $_POST["email"]);
$sql->execute();
$result = $sql->get_result();

if ($result === FALSE){
    die("<html><body><h1> Error: Query unsuccessful </h1> <p>Arc Code are sorry for the inconvinience, please try again later  </p></body></html>");
    return 0;

}

$row = $result->fetch_assoc();

// log in
$_SESSION["id"] = $row["userID"];
print_r($_SESSION["id"]);

header("Location: ../index.php", 301);
exit();

?>
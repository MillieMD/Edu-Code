<?php
session_start();

//server side validation, hopefully never seen by the user
if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
    die ("Must use a valid email");
}

if(empty($_POST["username"])){
    die ("Username required");
}

if(empty($_POST["password"])){
    die ("Password required");
}

if($_POST["confirm_password"] !== $_POST["password"]){
    die ("Password must match");
}

$passHash = password_hash($_POST["password"],PASSWORD_DEFAULT);

if(isset($_POST['teacher']) && $_POST['teacher'] == 'yes'){
    $teacher = 1;
}else{
    $teacher = 0;
}

var_dump($_POST);
var_dump($passHash);
var_dump($teacher);

//connect to db
$db = new mysqli("localhost","root","password","educode"); 

    if($db->connect_error){
        die("<html><body><h1> Error: ".mysqli_connect_error()." </h1> <p>Arc Code are sorry for the inconvinience, please try again later  </p></body></html>");

        return 0; 
    }

$sql = $db->prepare("INSERT INTO users (username, email, userPassword, isTeacher) VALUES (?, ?, ?, ?);");
$sql->bind_param("sssi",$_POST["username"], $_POST["email"], $passHash, $teacher);
$sql->execute();

$sql = $db->prepare("SELECT userID FROM users WHERE email = ?;");
$sql->bind_param("s", $_POST["email"]);
$sql->execute();
$result = $sql->get_result();

if ($result === FALSE){
    die("<html><body><h1> Error: Query unsuccessful </h1> <p>Arc Code are sorry for the inconvinience, please try again later  </p></body></html>");
    return 0;

}

$row = $result->fetch_assoc();

$_SESSION["id"] = $row["userID"];
print_r($_SESSION["id"]);

header("location: ../educode1.php"); //NOTE: redirecting this way isn't working, because of the apache modules, but its hard to tell which ones missing
exit;



?>
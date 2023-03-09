<?php

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

if($_POST['teacher'] == 'yes'){
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




?>
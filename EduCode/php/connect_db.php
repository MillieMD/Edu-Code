<?php 

function connect(string $dbname){
    $servername = "localhost";
    $username = ""; // Not uploading my username and password to a public github repo
    $password = "";
    
    $db = new mysqli($servername, $username, $password, $dbname);

    if($db->connect_error){

        die("Could not connect to data base: " .$db->connect_error);
        // TODO: Redirect to error page for database
    }

    return $db;
}

?>
<?php
echo "Welcome  we are ready to connect a database .";

// Connecting to database

$Servername ="localhost";
$username = "id18777383_spbank";
$password = "ABHIshek2707@#";
$database = "id18777383_spbankdb";
// Create connection

$conn = mysqli_connect($Servername, $username, $password, $database);

// die if connection unsuccessful
if(!$conn){
    die("Sorry we are failed to connect.".mysqli_connect_error());
}
else{
echo "Conecction Successful.";
}


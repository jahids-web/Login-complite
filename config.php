<?php
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="regteson";

    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    if(!$conn){
        die("connection error".mysqli_connect_error());
    }

?>
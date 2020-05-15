<?php

// connect to DB (MYSQLi or PDO)
$conn = mysqli_connect('localhost', 'prince', 'India123#', 'bytehub_contactus');

// check the connection

if(!$conn){
    echo 'connection error' . mysqli_connect_error();
}

?>
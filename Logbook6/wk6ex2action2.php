<?php

// Connect to server and select database
$link = mysqli_connect("localhost", "Riddle", "Riddle", "db1_gwalke02");


session_Start();

    //Execute sql statement
    $sql = "UPDATE test SET name = '$_POST[txtname]', email = '$_POST[txtemail]', phone_number = '$_POST[txttelno]' where ID = '$_SESSION[id]'";
    
    mysqli_query($link, $sql);
    header("Location: ./wk6ex2.php");
    exit();
?>

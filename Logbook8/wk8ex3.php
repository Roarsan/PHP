<?php
     $lottodate = date("Ymd");
     echo "The lottery numbers for " . date("d/m/Y") . " are ";
     for($n=1;$n<7;$n++)
     {
        $number[$n] = rand(1,49);
        echo "<br/> $number[$n]";
     }
     $conn = mysqli_connect("localhost", "Riddle", "Riddle", "db_1seven");

     $sql = "INSERT INTO lotto (lottodate, number1, number2, number3, number4, number5, number6) ";
     $sql .= "VALUES ('$lottodate', '$number[1]', '$number[2]', '$number[3]', '$number[4]', '$number[5]', '$number[6]')";
     

     mysqli_query($conn, $sql);
     echo "<br/>This weeks numbers have been saved";
?>
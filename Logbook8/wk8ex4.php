<?php     
     $conn = mysqli_connect("localhost", "Riddle", "Riddle", "db_1seven");
     $sql = "SELECT * FROM lotto";
     $result = mysqli_query($conn, $sql); 
     
     echo "<form action='" . $_SERVER['PHP_SELF'] . "' method='post'>";
     echo "<br/>Select the lottery week ";
     echo "<select name='selweek'>";
     while($row = mysqli_fetch_array($result)) {
         echo "<option value='" . $row['wk'] . "'>" . $row['wk'] . "</option>";
     }
     echo "</select><br/>";
     echo "<input type='submit' value='Select' />";
     echo "</form>";
     
?>
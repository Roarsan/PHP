<?php
$conn = mysqli_connect("localhost", "Riddle", "Riddle", "db_1gwalke01");

$sql = "select id from monster;";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

echo "<img src='getjpg.php?id=" . $row['id']. "'/>";

mysqli_close();
?>
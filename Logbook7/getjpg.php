<?php
  header("Content-type: image/jpeg");

  $link = mysqli_connect("localhost", "Riddle", "Riddle", "db_1gwalke01");

  $sql = "SELECT image FROM monster WHERE id='" . $_GET['id'] ."';";
	
  $result = mysqli_query($link, $sql);
  $row = mysqli_fetch_array($result);
  
  $jpg = $row["image"];

  echo $jpg;
?>
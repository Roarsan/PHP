<?php



	// Connect to server and select database
    $link = mysqli_connect("localhost", "Riddle", "Riddle", "db1_gwalke02");
	// Execute sql statement		

	$sql = "SELECT * from test";
    $result = mysqli_query($link, $sql);
    ?>
    <html>
    <body>
    
    <h1>Test Table</h1>

<?php
echo "<table rules='all' border=1><th>ID</th><th>Name</th><th>Actions</th>";
while ($row = mysqli_fetch_assoc($result))
{
    echo "<tr>";  
    echo "<td>$row[ID]</td>";  
    echo "<td>$row[name]</td>";  
    echo "<td><a href=\"wk6ex2action.php?id=$row[ID]\">Edit</a> | <a href=\"wk6ex2action3.php?id=$row[ID]\">Delete</a></td>";  
    echo "</tr>";	
}
echo "</table>";
?>
</body>
</html>
    
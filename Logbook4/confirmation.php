<?php
   $newp = $_POST['price']; // Set the price per widget to $10 (can be changed as per requirement)
   $qty = $_POST['qty']; // Retrieve the quantity of the order from the form submission
   $selcolour = $_POST['selcolour']; // Retrieve the selected color from the form submission
 
   echo "<h2>Your order qty is $qty</h2>";
   echo "<h2>The selected colour is $selcolour.</h2>";
 
 
   $total_price = $qty * $newp; // Calculate the total price based on the quantity and price
   echo "<h2>The total price for $qty widgets is $total_price.</h2>";
?>

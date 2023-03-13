

   <?php
   session_start();
   $qty = $_SESSION['selqty'];
   $colour = $_POST['selcolour'];
   $size = $_SESSION['selsize'];
   $price = 0;

   switch ($size) {

    case 'Small':

      $total = $qty * 15.75;
      break;

    case 'Medium':
      $total = $qty * 16.75;
      break;

    case 'Large':
      $total = $qty * 17.75;
      break;

    case 'Extra Large':
      $total = $qty * 18.75;
      break;

    default:
      $total = "Undefined";
      break;
  }

   echo "<h2>Your order qty is $qty</h2>";
  
   echo "<h2>The selected colour is $colour.</h2>";
   echo "<h2>The selected size is $size .</h2>";
   echo "<h2> Your total is £$total</h2>";





?>

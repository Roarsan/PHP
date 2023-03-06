<html>
	<head>
<title>My Guestbook</title>
</head>
<body>

<h1>Welcome to my Guestbook</h1>
<h2>Please write me a little note below</h2>
<!-- form that sends data to the current PHP file-->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">

<!-- Creates textarea and submit button-->
<textarea cols=40 rows=5 name=note wrap=virtual></textarea>
<input type=submit value=" Send it ">
</form>


<?php
//processes the data submitted from the form
    if(isset($_POST['note']))
    {
       // Substituted your login in place of "yourLogin"
       $fp = fopen("your Login.txt","a");
       fputs($fp,nl2br($_POST['note']).'<br>');
       fclose($fp);
    }
?>
<h2>The entries so far:</h2>

<?php
    // Substituted your login in place of "yourLogin"
 @ReadFile("your Login.txt")
?>
</body>
</html>

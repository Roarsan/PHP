<?

//Outputs appropriate message if the string MSIE is found or not in the super global variables header
if (strpos($_SERVER["HTTP_USER_AGENT"], "MSIE") != false) 
{
   echo "You are using Internet Explorer<br/>";
}
else
{
   echo "Why are you not using Internet Explorer ?<br/>";
}
?> 

<!DOCTYPE html>
<html>
  <head>
    <form method="POST">
      <h1>Enter a Color:</h1>
        <input type = "string" name = "string">
        <input type = "submit" value = "Submit">

    </form>
  </head>
<body>

<?php
$favcolor = "red";
if($_POST)
{
   $string=$_POST['string'];
   switch ($favcolor) {
     case "red":
       echo "Your favorite color is red!";
       break;
     case "blue":
       echo "Your favorite color is blue!";
       break;
     case "green":
       echo "Your favorite color is green!";
       break;
     default:
       echo "Your favorite color is neither red, blue, nor green!";

   }

}



?>

</body>
</html>

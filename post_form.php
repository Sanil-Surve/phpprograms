<?php
   if(isset($_POST["s1"]))
   {
     echo "Welcome ".$_POST["name"]."<br>";
     echo "Your are ".$_POST["age"]." years old.";
   }
?>

<html>
 <body>
   <form action= "<?php $_PHP_SELF; ?>" method = "POST">
     Name: <input type="text" name = "name" />
     Age: <input type= "text" name = "age" />
     <input type="submit" name = "s1" value = "Ok"/>
   </form>
 </body>
</html>

<?php
   if(isset($_GET["s1"]))
   {
     echo "Welcome ".$_GET["name"]."<br>";
     echo "Your are ".$_GET["age"]." years old.";
   }
?>

<html>
  <head>
    <style>
       body {
         background-color: yellow;
         padding: 10vh;
       }
       form {
         text-align: center;
       }
       #text {
         background-color: blue;
       }
    </style>
  </head>
 <body>
   <form action= "<?php $_PHP_SELF; ?>" method = "GET">
     Name: <input type="text" name = "name" />
     Age: <input type= "text" name = "age" />
     <input type="submit" name = "s1" value = "Ok"/>
   </form>
 </body>
</html>

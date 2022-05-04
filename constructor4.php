<html>
 <head>
   <title> This is constructor and destructor </title>
 </head>
 <body>
   <?php
     class suyog
     {
       function  __construct()
       {
         echo"constructor is called..<br>";
        }
      function  __destruct()
      {
        echo "destructur is called..";

      }
    }
    $obj=new suyog();
   ?>
</body>
</html>

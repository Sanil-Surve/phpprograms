<html>
 <body>
   <form method="POST">
     <h1>Enter a Number:</h1>
       <input type = "number" name = "number">
       <input type = "submit" value = "Submit">
   </form>
   <?php
      $num = 153;
      $sum = 0;
      $x = $num;

      while($x!=0)
      {
        $rem = $x%10;
        $sum = $sum + $rem * $rem * $rem;
        $x = $x/10;
      }

      if($num == $sum)
      {
        echo $num." is Armstrong Number";
      }
      else
      {
        echo $num." is not Armstrong number";
      }
   ?>
 </body>
</html>

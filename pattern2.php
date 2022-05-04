<html>
 <body>
   <?php
      $number = 7;

      $i = $number;
      $j = 0;

      while($i > 0)
      {
        echo "<br>";
      }
          $j = 0;
          while($j++ < $number - $i)
          {
            echo "* ";
          }

          $j = 0;



          while($j++ < ($i * 2) - 1)
          {
            echo "*";
          }
          echo "<br>";
          $i--;

  ?>
</body>
</html>

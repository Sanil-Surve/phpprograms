<html>
  <body>
    <?php
          $num = 12231;
          $sum = 0;
          $x = $num;

          while(floor($x))
          {
            $rem = $x%10;
            $sum = $sum * 10 + $rem;
            $x = $x/10;
          }

          if($num == $sum)
            echo $num." is palindrome";
          else
            echo $num." is not palindrome";
    ?>
  </body>
</html>

<html>
  <body>
    <?php
      for($i=1; $i<100; $i++)
      {
        $count=0;
        for($j=2; $j<=$i; $j++)
        {
          if($i%$j==0)
          {
            $count++;
            break;
          }
          if($count==0)
          {
            echo "<h1>$i"."";
          }

        }

      }

    ?>
  </body>
</html>

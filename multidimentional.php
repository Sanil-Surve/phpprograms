<html>
  <body>
    <?php
       $emp = array(
         array(1 ,"Sanil = ",45678899),
         array(2 ,"Suyog = ",4569),
         array(3 ,"Abhay = ",499)
       );

       for($row = 0; $row < 3; $row++)
       {
         for($col = 0; $col < 3; $col++)
         {
           echo $emp[$row][$col]." ";
         }
         echo "<br/>";
       }
    ?>
  </body>
</html>

<html>
 <body>
   <?php
      function get_num_of_words($string) {
         $string = preg_replace('/\s+/', ' ', trim($string));
         $words = explode(" ", $string);
         return count($words);
      }
      $str = "Sanil Omkar Suyog ";
      $len = get_num_of_words($str);
      echo $len;
   ?>
 </body>
</html>

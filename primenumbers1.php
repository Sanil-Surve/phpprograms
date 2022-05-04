<html>
  <head>
    <style>
     body {
       text-align: center;
       background-color: black;
       flex:10vh;
     }
     h1 {
       background-color: aqua;
     }
     h2 {
       background-color: yellow;
     }
   </style>
  </head>
  <body>

 <form method="post">
      <h1>Enter a Number:</h1> <input type="text" name="input"><br><br>
      <input type="submit" name="submit" value="Submit">
 </form>
 <?php
  if($_POST)
  {
     $input=$_POST['input'];
     for ($i = 2; $i <= $input-1; $i++) {
       if ($input % $i == 0) {
         $value= True;
       }
     }
    if (isset($value) && $value) {
      echo "<h2>".'The Number '. $input . ' is not prime';
    }
    else {
     echo "<h2>".'The Number '. $input . ' is prime';
    }
  }
?>

 </body>
</html>
